
<div id="test">
    <div class="avatar"><div id="closed" class="closed"></div>
        <div id="ava" class="ava"></div>
        <div class="fio">
            Гавриил Гавриилович
        </div>
        <div class="thepost">
            дЫрэктар
        </div>
        <div id="print">
            печатает
        </div>
    </div>
    <div id="messgeAll"class="contText">
        <div id="dialog">

        </div>
    </div>
    <div class="textinter">
        <input id="message" type="text" class="inp" placeholder="Введите сообщение ">
        <input id="messClcik" value="ОК" class="butt" type="button">
    </div>
</div>
<script>


    var dialog = document.getElementById("dialog");
    var mess = document.createElement('div');
    var text = "Доброго времени. Вы бы хотели заказать пицу? Что вам понравилось у нас?";
    var textNode = document.createTextNode(text);
    setTimeout(function() {
        mess.appendChild(textNode);
        dialog.appendChild(mess);
        dialog.className = "owner";
    }, 4000);
    var butonSend = document.getElementById("messClcik");
    var messgeAll = document.getElementById("messgeAll");

    butonSend.onclick = function() {
        var theDiv = document.createElement('div');
        var userMessage = document.getElementById("message");
        if(userMessage.value != ''){
            document.getElementById('ava').style="background:url('http://vamotkrytka.ru/_ph/80/2/15311132.gif');background-size:cover; "
            document.getElementById('print').style= "display:block";
            theDiv.innerHTML = userMessage.value;
            theDiv.className = "user";
            messgeAll.appendChild(theDiv);


            setTimeout(function() {
                var answear = "да ну нах, У Володи Путина спроси, она вчерашняя, Эта вообще не вкусная, будешь с водкой брать?, завтра пиши, самая дешевая, еп те, по клавишам не попадаю, ты бухой?, иди проспись пьянь!";
                var arr = answear.split(', ');
                var rand = Math.floor(Math.random() * arr.length);
                var newOwner = document.createElement('div');
                newOwner.innerHTML = arr[rand];
                newOwner.className = "owner";
                messgeAll.appendChild(newOwner);
                document.getElementById('ava').style="";
                document.getElementById('print').style= "display:none";
            }, 4000);

            return true;
        }else{
            return false;
        }
    }

</script>
