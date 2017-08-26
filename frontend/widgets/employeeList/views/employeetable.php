<table class="table">
    <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Дата рождения</th>
            <th>Город</th>
            <th>Дата начала работы</th>
            <th>Стаж работы</th>
            <th>Должность</th>
            <th>Номер отдела</th>
            <th>Идентификационный код</th>
            <th>email</th>
            <th>Зарплата</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $employee): ?>
            <tr>
                <td><?php echo $employee['firstname']; ?></td>
                <td><?php echo $employee['lastname']; ?></td>
                <td><?php echo $employee['middlename']; ?></td>
                <td><?php echo $employee['date_of_birth']; ?></td>
                <td><?php echo $employee['city']; ?></td>
                <td><?php echo $employee['start_date_of_work']; ?></td>
                <td><?php echo $employee['work_experience']; ?></td>
                <td><?php echo $employee['position']; ?></td>
                <td><?php echo $employee['department_number']; ?></td>
                <td><?php echo $employee['id_code']; ?></td>
                <td><?php echo $employee['email']; ?></td>
                <td><?php echo $employee['salary']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table> 