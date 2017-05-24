<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:<?=$darkblue?>;">
    <form action="#">
        <?php
            $headline = "Форма";
            $red = "red";
            $green = "green";
            $darkblue = "darkblue";
        ?>
        <?php
            echo <<<END
        <h1>Форма #1</h1>            
END;
        ?>
        <div class="name">
            <input type="text" placeholder="Ваше имя..." style="background-color:<?=$red?>;">
            <input type="text" placeholder="Ваша фамилия..." style="background-color:<?=$green?>">
            <input type="text" placeholder="Ваше отчество..." style="background-color:<?=$darkblue?>;">
        </div>
        <div class="gender">
            <input type="radio" id="man" name="gender">
            <label for="man">Мужчина</label>
            <input type="radio" id="woman" name="gender">
            <label for="woman">Женщина</label>
        </div>
        <?php echo <<<END
            <h3>Месяц</h3>
END;
        ?>
        <div class="season">
            <div class="form-group">
                <input type="checkbox" id="winter">
                <label for="winter">Зима</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="spring">
                <label for="spring">Весна</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="summer">
                <label for="summer">Лето</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="autumn">
                <label for="autumn">Осень</label>
            </div>
        </div>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>