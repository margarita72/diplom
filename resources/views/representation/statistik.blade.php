<div class="blok_mua4">
    <div class="blok-1">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="gits">
            <circle cx="50" cy="50" r="22">
                <animateTransform attributeName="transform"
                                  attributeType="XML" type="rotate" from="0 50 50"
                                  to="360 50 50" dur="10s" repeatCount="indefinite" />
            </circle>
            <circle cx="50" cy="50" r="24">
                <animateTransform attributeName="transform"
                                  attributeType="XML" type="rotate" from="0 50 50"
                                  to="360 50 50" dur="8s" repeatCount="indefinite" />
            </circle>
            <circle cx="50" cy="50" r="26">
                <animateTransform attributeName="transform"
                                  attributeType="XML" type="rotate" from="0 50 50"
                                  to="-360 50 50" dur="8s" repeatCount="indefinite" />
            </circle>
            <circle cx="50" cy="50" r="30">
                <animateTransform attributeName="transform"
                                  attributeType="XML" type="rotate" from="0 50 50"
                                  to="360 50 50" dur="14s" repeatCount="indefinite" />
            </circle>
            <circle cx="50" cy="50" r="34">
                <animateTransform attributeName="transform"
                                  attributeType="XML" type="rotate" from="0 50 50"
                                  to="360 50 50" dur="18s" repeatCount="indefinite" />
            </circle>
            <circle cx="50" cy="50" r="34">
                <animateTransform attributeName="transform"
                                  attributeType="XML" type="rotate" from="0 50 50"
                                  to="-360 50 50" dur="20s" repeatCount="indefinite" />
            </circle>
            <text x="49" y="54">0</text>

        </svg>

    </div>
    <h3>
        Проданно товаров
    </div>
    <br>



    <table class="blok-2">


        <thead>
        <tr>
            <td></td>
            <th scope="col">К1</th>
            <th scope="col">К2</th>
            <th scope="col">К3</th>
            <th scope="col">К4</th>
            <th scope="col">К5</th>
            <th scope="col">К6</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Компания 1</th>
            <td>190</td>
            <td>160</td>
            <td>40</td>
            <td>120</td>
            <td>30</td>
            <td>70</td>
        </tr>
        <tr>
            <th scope="row">Компания 2</th>
            <td>3</td>
            <td>40</td>
            <td>30</td>
            <td>45</td>
            <td>35</td>
            <td>49</td>
        </tr>
        <tr>
            <th scope="row">Компания 3</th>
            <td>10</td>
            <td>180</td>
            <td>10</td>
            <td>85</td>
            <td>25</td>
            <td>79</td>
        </tr>
        <tr>
            <th scope="row">Компания 4</th>
            <td>40</td>
            <td>80</td>
            <td>90</td>
            <td>25</td>
            <td>15</td>
            <td>119</td>
        </tr>
        </tbody>
    </table>

</div>




<script>

    function getRandomInRange(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    var circles = document.querySelectorAll("#gits circle"),
        progress = document.getElementsByTagName("text")[0];

    for (var j = 0; j < circles.length; ++j) {
        var radius = parseInt(circles[j].getAttribute('r'), 10);
        circles[j].circumference = 2 * radius * Math.PI;
        circles[j].init = getRandomInRange(20,80);
        circles[j].style.strokeDasharray = circles[j].init + " " + circles[j].circumference;
    }

    var i = 0;
    var timer = setInterval(function() {
        progress.textContent = i;
        if (i == 58) {
            clearInterval(timer);
        } else {
            i++;
            for (var j = 0; j < circles.length; ++j) {
                circles[j].style.strokeDasharray = circles[j].init + i + " " + circles[j].circumference;
            }

        }}, 500)
</script>
<style>

    svg#gits {
        display: block;
        width: 250px;
        /*background: rebeccapurple;*/
        float: left;
        text-align: justify;
        margin: 15px;
    }
    svg#gits circle {
        stroke: rgba(41, 67, 118, 0.77);
        fill: none;
        stroke-width: 4px;
        transition: .2s;
        stroke-dashArray: 0 600;
    }
    svg#gits text {
        font-family: 'Titillium Web', sans-serif;
        font-size: 12px;
        text-anchor: middle;
    }

    /*.blok-1{
        background: #0e3950;
        display: block;
        float: left;
        width: 500px;
        margin: 2px;
    }*/
    .blok-2{
        /*background: #97e77a;*/
        display: block;
        float: left;
        width: 50%;
        height: 3++++50px;
        margin: 2px;
    }
    table {border: 3px solid #69c;}
    th {
        font-weight: normal;
        color: #039;
        padding: 20px;
    }
    td {
        color: #669;
        border-top: 1px dashed #fff;
        padding: 8px;
        background:#ccddff;
    }
    tr:hover td {background: #99bcff;}


</style>
