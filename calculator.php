<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Siuu</title>
    <style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: white ;
}

.container {
    width: 350px;
    margin: 100px auto;
    background-color: #333333 ;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
}

h1 {
    text-align: center;
    color: black;
    padding-bottom: 0px;
    margin-top: 100px;
    
}

.input-container {
    text-align: right;
    margin-bottom: 20px;
    
}

#hasil {
    padding: 10px;
    border: none;
    border-bottom: 2px solid #ddd;
    font-size: 24px;
    width: 100%;
    box-sizing: border-box;
    background-color: #ccc;
    outline: none;
    text-align: right; 
}


.buttons {
    text-align: center;
    background-color: #ccc;
    border-radius: 10px;
    padding: 10px;
}

.button {
    padding: 12px 24px;
    margin: 5px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    background-color: #f39c12;
    transition: background-color 0.3s, transform 0.3s;
}

.button:hover {
    background-color: #f1c40f;
    transform: scale(1.05);
}

.equals-button {
    padding: 12px 24px;
    margin: 5px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    background-color: #f39c12;
    color: white;
    transition: background-color 0.3s, transform 0.3s;
}

.equals-button:hover {
    background-color: #f1c40f; 
    transform: scale(1.05);
}


    </style>
</head>
<body>
    <h1>KALKULATORIZ</h1>
    <div class="container">
        <div class="input-container">
            <input type="text" id="hasil" name="hasil" placeholder=" 0" readonly>
        </div>
        <div class="buttons">
            <?php
            $buttons = ['-','7', '8', '9', '+', '4', '5', '6', '-', '1', '2', '3', '*', '0', '.', '/', '='];

            foreach ($buttons as $button) {
    
                if ($button == '=') {
                    echo '<button class="equals-button" onclick="hitung()">' . $button . '</button>';
                } else {
                    echo '<button class="button" onclick="tambahAngka(\'' . $button . '\')">' . $button . '</button>';
                }
                if ($button == '3' || $button == '6' || $button == '9' || $button == '/') {
                    echo '<br>';
                }
            }
            ?>
            <button class="button" onclick="hapusSemua()">C</button>
            <button class="button" onclick="hapusAngka()">< Hapus</button>

        </div>

        <script>
            function tambahAngka(angka) {
                var inputHasil = document.getElementById("hasil");
                inputHasil.value += angka;
            }

            function hitung() {
            var inputHasil = document.getElementById("hasil");
             var hasil = eval(inputHasil.value);

             if (!isNaN(hasil)) {
              inputHasil.value = hasil;
             } else {
             inputHasil.value = "Error";
             }
           }

            function hapusSemua() {
                document.getElementById("hasil").value = "";
            }
            function hapusAngka() {
              var inputHasil = document.getElementById("hasil");
               inputHasil.value = inputHasil.value.slice(0, -1);
             }

        </script>
    </div>
</body>
</html>
