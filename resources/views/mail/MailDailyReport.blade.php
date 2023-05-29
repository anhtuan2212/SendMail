<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    .mailler-wrapper {
        position: relative;
        border: solid 1px;
        width: 21cm;
        height: 29.7cm;
        top: 100%;
        padding: 10px
    }

    .body-mail {
        width: 100%;
        height: 100%;
    }

    /* .center {
        position: relative;
        width: 100vh;
        height: 100vh;
    } */

    .body-app {
        display: flex;
        justify-content: center;
    }

    .name-company {
        margin-top: 10%;
        font-size: 27px;
    }

    .infor-user {
        margin-top: 4%;
        margin-left: 5%;
    }

    .time {
        padding: 11px;
        padding-top: 16px;
        padding-bottom: 16px;
        margin-left: 25px;
    }

    td,
    th {
        border: 1px solid;
    }

    table {
        margin-left: 5%;
        width: 90% !important;
        line-height: normal;
    }
</style>

<body class="body-app">
    <div class="mailler-wrapper">
        <div class="body-mail">
            <div class="header-mail"></div>
            <div class="body-content-mail row">
                <h1 class="col-12 name-company text-center">Cổ phần giải pháp công nghệ Newway</h1>
                <h4 class="col-12 text-center">--------------------------------</h4>
                <h4 style="margin-top:5%" class="col-12 text-center">Báo cáo kết quả công việc</h4>
                <div class="col-12 infor-user d-flex justify-content-around">
                    <div class="col-4 row ">
                        <label>Họ Tên : <strong>Tẩn Láo Lù</strong></label>
                    </div>
                    <div class="col-4 row ">
                        <label>Chức Vụ : Nhân Viên</label>
                    </div>
                    <div class="col-4 row ">
                        <label>Phòng Ban : Công Nghệ</label>
                    </div>
                </div>
                <div class="time">
                    <label id="label-show-time">Thời gian thực hiện : </label>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th class="col-1 text-center p-2"><strong>STT</strong></th>
                            <th class="col-4"><strong>Công Việc</strong></th>
                            <th class="col-7"><strong>Chi tiết công việc</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center p-1"><strong>1</strong></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="footer-mail"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        var today = new Date();
        var date = today.getDate() + '/' + (today.getMonth() + 1) + '/' + today.getFullYear();
        var element = document.getElementById("label-show-time");
        element.textContent += date;
    </script>
</body>

</html>
