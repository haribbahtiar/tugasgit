function infoSelect() 
    {
       var objPilihan = document.getElementById("ph");
       var objInfo = document.getElementById("info");
      
       var str = "Detail Keahlian : \n";

       for (var i = 0;
            i < objPilihan.options.length;
            i++)
           if (objPilihan.options[i].selected)
             str = str + 
                objPilihan.options[i].value + "\n";

       objInfo.value = str;
    }