<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">
        <title>게시판</title>
        <style>
            a{
                text-decoration: none;
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <section>
                <table class="table">
                    <thead>
                        <tr class="row text-start ms-1 my-2 display-6">
                            <th colspan="4"><a href="index.php">자유게시판</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row text-center">
                            <th class="col-1">No</th>
                            <th class="col-7">제목</th>
                            <th class="col-2">작성자</th>
                            <th class="col-2">작성날짜</th>
                        </tr>
                        <?php include "board_select.php" ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-dark" type="button" onclick="location.href='board_insert.php'">글쓰기</button>
                </div>
            </section>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    </body>
</html>