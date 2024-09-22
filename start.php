<div class="c">

<?php 
function form($user) {
    $errors = [
        'name' => '',
        'email' => '',
        'phone' => ''
    ];

    if (empty($user['name'])) {
        $errors['name'] = "Заполните поле имени";
    } elseif (strlen($user['name']) < 2) {
        $errors['name'] = "Не менее 2 символов в имени";
    }

    if (empty($user['email'])) {
        $errors['email'] = "Заполните поле почты";
    } elseif (strlen($user['email']) > 100) {
        $errors['email'] = "Почта не должна превышать 100 символов";
    } elseif (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Некорректный формат почты";
    }

    if (empty($user['phone'])) {
        $errors['phone'] = "Заполните поле номера телефона";
    } elseif (strlen($user['phone']) != 10) {
        $errors['phone'] = "Номер должен содержать 10 символов";
    }

    return $errors;
}

$errors = [
    'name' => '',
    'email' => '',
    'phone' => ''
];
if(isset($_POST['po'])){
    $userArray = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone']
    ];


    $errors = form($userArray);

    if (array_filter($errors) == false) {
        echo '<script>alert("Все прошло успешно")</script>';
    }
}
?>

<form action="" method="POST" name="po">
    <div class="lk">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?=$_POST['name']?>">
        <p><?= $errors['name']; ?></p>
    </div>

    <div class="lk">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?=$_POST['email']?>">
        <p><?= $errors['email']; ?></p>
    </div>

    <div class="lk">
        <label for="phone">Phone number</label>
        <input type="text" name="phone" id="phone" value="<?=$_POST['phone']?>">
        <p><?= $errors['phone']; ?></p>
    </div>

    <input type="submit" value="Войти" id="re" name="po">
</form>
</div>