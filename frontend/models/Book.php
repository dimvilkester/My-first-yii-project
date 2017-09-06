<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/** 
 *
 * @author mr. Anderson
 *  
 * Общий принцип работы Active Record
 * =====================================
 * Пусть существует таблица в базе данных. Для данной таблицы создаётся специальный класс AR, * являющийся отражением (представлением) таблицы, таким образом, что:
 * 
 * - каждый экземпляр данного класса соответствует одной записи таблицы;
 * - при создании нового экземпляра класса (и заполнении соответствующих полей) в таблицу добавляется новая запись;
 * - при чтении полей объекта считываются соответствующие значения записи таблицы баз данных;
 * - при изменении (удалении) какого-либо объекта изменяется (удаляется) соответствующая ему запись.
 */

class Book extends ActiveRecord {

    // 1. Указываем классу Book какую таблицу необходимо ему испоьзовать
    // table Book
    public static function tableName() {
        return '{{book}}';
    }
    
    public function rules() {
        return [
            [['name', 'isbn', 'date_published', 'publisher_id'], 'required'],
            [['name'], 'string', 'length' => [2, 10]],
            [['date_published'], 'date', 'format' => 'php:Y-m-d'],
            [['isbn', 'publisher_id'], 'integer'],
            [['isbn'], 'unique'],
        ];
    }
    
    /**
     * @return string
     */
    public function getDatePublished() {
        
        if ($this->date_published){
           return Yii::$app->formatter->asDate($this->date_published);
        } else {
           return 'Data not set'; 
        }
        
    }
    
    /**
     * @return Publisher|NULL
     * 
     * Вызывая метод getPublisher у экземпляра Book мы получяем связь с Publisher (Издателем)
     * Связь: У одной книги может быть одно издательство, а у одного издательства может быть много книг (один ко многим hasOne)
     * Метод hasOne возвращает объект класса ActiveQuery (в данном случаи возвращает объект класса ActiveQuery Publisher)
     * Метод one используется для получения данных из объекта Publisher (one потому что у одной книги может быть одно издательство)
     */
    
    public function getPublisher() {
        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id'])->one();
    }
    
    /**
     * @return string
     */   
    public function getPublisherName() {
        if ($publisher = $this->getPublisher()) {
            return $publisher->name;
        }
        
        return 'Publisher not set';
    }
    
    /**
     * @return ActiveQuery
     * 
     * Связываю таблицы book_to_author c book по столбцам book_id и id через модели BookToAuthor с Book
     * в итоге получаю Object ActiveQuery модели BookToAuthor
     */
    public function getBookToAuthorRelations() {
        return $this->hasMany(BookToAuthor::className(), ['book_id' => 'id']);
    }
    
    /**
     * @return Author[]
     * 
     * Связываю таблицы author c book_to_author по столбцам id и author_id через модели Author с BookToAuthor
     * Использую метод via, который связывает текущую связь через другую связь (bookToAuthorRelations)
     * Метод hasMany возвращает объект класса ActiveQuery (в данном случаи возвращает объект класса ActiveQuery Author)
     * Метод all используется для получения данных из объекта Author (all потому что у одной книги может быть несколько авторов и наоборот)
     */
    public function getAuthors() {
        return $this->hasMany(Author::className(), ['id' => 'author_id'])->via('bookToAuthorRelations')->all();
    }

}