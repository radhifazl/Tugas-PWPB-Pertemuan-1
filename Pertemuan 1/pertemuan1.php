<html>
    <head>
        <title>Embed CSS</title>
        <style>

            h1{
                color:blue;
                font-family:arial;
                font-size:100px;
            }

            h2{
                color:green;
                font-family;verdana;
                font-style:oblique;
                font-variant-caps: small-caps;
            }

            p{
                color:grey;
                font-family:georgia, serif;
            }

            label{
                font-family:arial;
                color:red;
            }

            input[type=text]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
            }

            textarea {
                width: 100%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                resize: none;
            }

            input[type=button], input[type=submit], input[type=reset] {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                float: right;
            }

        </style>
    </head>
    <body>

        <h1>Hello Embed</h1>

        <h2>HELLO EMBED</h2>

        <p>
            <b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
            Aldus PageMaker including versions of Lorem Ipsum.
        </p>

        <form action="" method="POST">
            <label>Masukan NIS</label>
            <input type="text" name="nis" />
            <textarea name="alamat">Masukan alamat ...</textarea>
            <input type="submit" name="proses" value="Proses" />
        </form>

    </body>
</html>