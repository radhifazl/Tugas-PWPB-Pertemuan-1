<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pertemuan 1 CSS Embed | Radhif Azli N</title>

    <style>
        body {
            padding: 16px;
        }
        h1, h2 {
            text-align: center;
            line-height: 16px;
        }
        #judulform {
            font-weight: bold;
        }
        li {
            margin-bottom: 16px;
        }
        #nama, #alamat, #tempattgl, #perguruan, #jurusan, #no {
            border: none;
            outline: none;
        }

        #titikdua {
            margin-left: 96px;
        }
        input {
            margin-left: 32px;
        }

        textarea {
            border: none;
            border-bottom-style: dotted;
            resize: none;
            outline: none;
        }
    </style>

</head>
<body>
    <h1>Formulir Pendaftaran</h1>
    <h2>Training of trainer & Rekruitmen Relawan</h2><br>
    <h2>Yayasan Taman Semesta</h2><br>
    <p>Assalamualaikum</p>
    <p style="width: 50%;">
        Semoga menjumpa dalam keadaan sehat. Kami mengucapkan terimakasih atas ketertarikan teman-teman 
        mengikuti Training of Trainer dan Rekruitmen relawan ini. Agar memudahkan kami dalam mengenal 
        calon peserta, silahkan mengisi formulir di bawah ini.
    </p>

    <form>
        <label id="judulform">1. Identitas</label>
        <ul>
            <li>
                <label for="nama">Nama</label>
                <label for="nama" id="titikdua">:</label>
                <input type="text" id="nama">
            </li>
            
            <li>
                <label for="alamat">Alamat</label>
                <label for="alamat" id="titikdua">:</label>
                <input type="text" id="alamat">
            </li>

            <li>
                <label for="tempattgl">Tempat/Tanggal lahir :</label>
                <input type="text" id="tempattgl">
            </li>

            <li>
                <label for="perguruan">Asal Perguruan Tinggi :</label>
                <input type="text" id="perguruan">
            </li>
            
            <li>
                <label for="jurusan">Jurusan</label>
                <label for="jurusan" id="titikdua">:</label>
                <input type="text" id="jurusan">
            </li>
            
            <li>
                <label for="no">No HP</label>
                <label for="no" id="titikdua">:</label>
                <input type="text" id="no">
            </li>
        </ul><br>
    </form>

    <form>
        <label id="judulform">2. Motivasi</label><br>
            <ul>
                <li>PENDAPAT DAN IMPIANMU TENTANG PENDIDIKAN INDONESIA : <br>
                    <textarea rows="1" cols="85"></textarea><br>
                    <textarea rows="1" cols="85"></textarea><br>
                    <textarea rows="1" cols="50"></textarea>
                </li>

                <li>ALASAN BERGABUNG DENGAN YAYASAN INI : <br>
                    <textarea rows="1" cols="85"></textarea><br>
                    <textarea rows="1" cols="85"></textarea><br>
                    <textarea rows="1" cols="50"></textarea>
                </li>

                <li>HARAPAN SETELAH DITERIMA : <br>
                    <textarea rows="1" cols="85"></textarea><br>
                    <textarea rows="1" cols="85"></textarea><br>
                    <textarea rows="1" cols="50"></textarea>
                </li>
            </ul>
    </form>
    <label>*Silahkan kirim formulir ini ke bone_tesa@yahoo.com</label>
</body>
</html>