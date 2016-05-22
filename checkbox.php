<!DOCTYPE html>
<html>
<head>
<script>
function displayResult(frm){   
 var selectedbuah="";
    for (i = 0; i < frm.buah.length; i++){ //menghitung jumlah panjang array
  if (frm.buah[i].checked){   
   selectedbuah += frm.buah[i].value +", ";
  }
    }
 //memunculkan data di input id result yg isinya select buah
    document.getElementById("result").value=selectedbuah;
}
function displayAlert(frm){   
 var selectedbuah="";
    for (i = 0; i < frm.buah.length; i++){   
  if (frm.buah[i].checked){   
   selectedbuah += frm.buah[i].value +", ";
  }
    }
    if (selectedbuah==""){ //jika tidak ada buah yg dipilih  
  alert("Silahkan pilih buah favoritmu !");
        form.buah[0].focus();
        return false;
    }
    else
    alert("Buah favorit kamu : " + selectedbuah);
}
</script>
</head>
<body>
<form>
<p>Pilih buah favoritmu :</p>
<input type="checkbox" name="buah" onclick="displayResult(this.form)" value="Anggur">Anggur

<input type="checkbox" name="buah" onclick="displayResult(this.form)" value="Apel">Apel

<input type="checkbox" name="buah" onclick="displayResult(this.form)" value="Semangka">Semangka

<input type="checkbox" name="buah" onclick="displayResult(this.form)" value="Durian">Durian

<input type="checkbox" name="buah" onclick="displayResult(this.form)" value="Mangga">Mangga


Buah favorit kamu : <input type="text" id="result" size="60">

<button type="button" onclick="displayAlert(this.form)">Lihat buah favoritmu</button>
</form>
</body>
</html>