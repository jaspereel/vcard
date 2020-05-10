<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vcard 電子名片</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Noto+Serif+TC:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container-fluid h-100 d-flex justify-content-center align-items-lg-center p-4 m-lg-0">
        <div class="box">
            <h2 class="title my-2">Vcard 電子名片</h2>
            <form class="form-group m-2" method="post" action="api.php" enctype="multipart/form-data">
                <label class="text-white">姓名/Name</label>
                <input class="form-control" type="text" name="name" placeholder="Please in put your name" size="35" required="required" />
                <label class="text-white">職稱/Position</label>
                <input class="form-control" type="text" name="position" placeholder="Please in put your position" size="35" required="required" />
                <label class="text-white">技能/Skill</label>
                <textarea class="form-control" style="vertical-align:middle" name="skill" placeholder="Please in put your skill" cols="35" rows="3"></textarea>
                <label class="text-white">電子信箱/E-mail</label>
                <input class="form-control" type="text" name="mail" size="35" placeholder="Please in put your E-mail" required="required" />
                <label class="text-white">手機號碼/Mobile</label>
                <input class="form-control" type="text" name="mobile" size="35" placeholder=" Please in put your number" required="required" />
                <label class="text-white">照片/Photo</label>
                <input type="file" name="photo" />
                <label class="text-white">版型 /Module</label>
                <select class="form-control" name="module">
                    <option value="module1">大地綠</option>
                    <option value="module2">暗沉橘</option>
                    <option value="module3">天空藍</option>
                    <option value="module4">閃耀黃</option>
                </select>
                <button class="btn btn-info btn-block font-weight-bold my-2">送出預覽</button>
            </form>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>

</html>