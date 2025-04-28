
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/light-font@0.2.63/css/materialdesignicons-light.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Download Report</title>
    <style>
        body {
            font-family: 'Noto Sans Thai', sans-serif;
            font-size: 22px;
            margin-left: 100px;
            margin-top: 50px;
            background-color: rgb(253, 253, 247);
        }

        .btn {
            background-color: rgb(45, 116, 4);
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn:hover {
            background-color: rgb(23, 141, 62);
        }

        .title {
            color: #2c3e50;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <form action="/export" method="GET">
        <div>
            <p class="title">Download Report</p>

            <button type="submit" class="btn">
                <i class="fa fa-download"></i> Download(.Xls)
            </button>
        </div>
    </form>

</body>
</html>
