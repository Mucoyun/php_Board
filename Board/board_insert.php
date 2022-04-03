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
            }textarea{
                resize: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <section>
                <form name="board_insert_form" method="POST" action="board_insert_process.php">
                    <table class="table">
                        <thead>
                            <tr class="row text-start ms-1 my-2 display-6">
                                <th colspan="4"><a href="index.php">자유게시판</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row text-center">
                                <th class="col-2">제목</th>
                                <td class="col-10">
                                    <input class="w-100" type="text" name="title"/>
                                </td>
                            </tr>
                            <tr class="row text-center">
                            <th class="col-2 text-center">내용</th>
                                <td class="col-10">
                                    <textarea class="w-100" rows="10" name="content"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-dark me-2" type="submit">입력</button>
                        <button class="btn btn-dark" type="button" onclick="location.href='index.php'">취소</button>
                    </div>
                </form>
            </section>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    </body>
</html>