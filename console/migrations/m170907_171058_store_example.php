<?php

use yii\db\Migration;

class m170907_171058_store_example extends Migration {

    public function up() {
        $this->createProduct();
        $this->createManufacturer();
        $this->createCategory();
    }

    public function down() {
        $this->dropTable('product');
        $this->dropTable('manufacturer');
        $this->dropTable('category');
    }

    private function createProduct() {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'code' => $this->string(),
            'colour' => $this->string(),
            'price' => $this->float(),
            'description' => $this->text(),
            'characteristic' => $this->string(),
            'size' => $this->string(),
            'category_id' => $this->integer(),
            'manufacturer_id' => $this->integer(),
            'status' => $this->integer(),
        ]);

        $this->insert('product', [
            'id' => 1,
            'name' => 'CHECKED SHIRT',
            'code' => 'RB320-33X',
            'colour' => 'red',
            'price' => 5,
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
            'characteristic' => 'Short sleeve',
            'size' => 'M',
            'category_id' => 1,
            'manufacturer_id' => 1,
            'status' => 1,
        ]);

        $this->insert('product', [
            'id' => 2,
            'name' => 'Black and white print t-shirt',
            'code' => 'RB345-09M',
            'colour' => 'grey',
            'price' => 5,
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
            'characteristic' => 'Short sleeve',
            'size' => 'M',
            'category_id' => 1,
            'manufacturer_id' => 1,
            'status' => 1,
        ]);

        $this->insert('product', [
            'id' => 3,
            'name' => 'Super Bad t-shirt',
            'code' => 'QQ550-85M',
            'colour' => 'blue',
            'price' => 3,
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
            'characteristic' => 'With print',
            'size' => 'L',
            'category_id' => 1,
            'manufacturer_id' => 1,
            'status' => 1,
        ]);

        $this->insert('product', [
            'id' => 4,
            'name' => 'Plain hoodie',
            'code' => 'RC074-90M',
            'colour' => 'green',
            'price' => 6,
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
            'characteristic' => 'Jumpers',
            'size' => 'L',
            'category_id' => 2,
            'manufacturer_id' => 2,
            'status' => 1,
        ]);
    }

    private function createCategory() {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->text(),
        ]);
        $this->insert('category', [
            'id' => 1,
            'name' => 'T-Shirts',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
        ]);
        $this->insert('category', [
            'id' => 2,
            'name' => 'Shirts',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
        ]);
        $this->insert('category', [
            'id' => 3,
            'name' => 'Sweatshirts',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
        ]);
        $this->insert('category', [
            'id' => 4,
            'name' => 'Jeans',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
        ]);
    }

    private function createManufacturer() {
        $this->createTable('manufacturer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->text(),
        ]);

        $this->insert('manufacturer', [
            'id' => 1,
            'name' => 'House',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
        ]);

        $this->insert('manufacturer', [
            'id' => 2,
            'name' => 'Crop',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
        ]);

        $this->insert('manufacturer', [
            'id' => 3,
            'name' => 'reebok',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
        ]);

        $this->insert('manufacturer', [
            'id' => 4,
            'name' => 'adidas',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
        ]);
    }

}
