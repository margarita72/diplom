<script>
//сортировка пузырьком
let a = [50,45,12,1,3,7,6];

/*for (let i=0; i<a.length; i++){
    for (let j=i; j<a.length; j++){
        if (a[i]>a[j]){
            let temp = a[i];
            a[i]=a[j];
            a[j]=temp;
        }
        console.log(a);
    }
}*/

let b = [50,45,12,1,3,7,6];

for (let i=0; i<a.length; i++){
    /*for (let j=i; j<a.length; j++){
        if (a[i]>a[j]){
            let temp = a[i];
            a[i]=a[j];
            a[j]=temp;
        }
        console.log(a);
    }*/
    console.log(b);
}


    /*let elem = document.querySelector('#nav');
    console.log(elem);
    //replaceDNode = nav.replaceChild(nav.children[1],nav.children[0]);
    replaceDNode = elem.replaceChild(elem.children[1],elem.children[0]);//затираем элемент в переменную
    console.log(replaceDNode);
    elem.appendChild(replaceDNode);//переставляем переменую в конец
*/
    //document.querySelector('#sort-acs25').onclick = mySort;
    /*document.querySelector('#sort-ac').onclick = mySort;
    //mySort();
        function mySort() {
            alert('ты в функции');
        let nav = document.querySelector('#nav');
        for (let i=0; i<nav.children.length; i++) {
            for (let j = i; j < nav.children.length; j++) {

                if (+nav.children[i].getAttribute('data-sort') > +nav.children[j].getAttribute('data-sort')){
                    replaceDNode = nav.replaceChild(nav.children[j], nav.children[i]);//перезаписываю элемент
                    insertAfter(replaceDNode, nav.children[i]);//вставляю перезаписаный элемент после записанного

                }
            }
        }


    }
    function insertAfter(elem, refElem) {
        return refElem.parentNode.insertBefore(elem,refElem.nextSibling)
    }*/

    function getSelectvalue() {
        var Selectvalue = document.getElementById('selectThis').value;
        console.log(Selectvalue);

        if (Selectvalue == '.option1'){
            //alert('цены сначала дешевые');
            mySort1('data-sorts');


        }else if (Selectvalue == '.option2'){
            mySortDesc('data-sorts');
        }
        else if (Selectvalue == '.option3') {
            //alert('gh c');
            mySortRating('data-rating');
        }
        else if (Selectvalue == '.option'){
            mySortID('data-id');
        }
    }

</script>

{{--то что сейчас нужно--}}
<script>

    let elem = document.querySelectorAll('#navs');
    console.log(elem);
    /*document.querySelector('#knops').onclick = function () {
        mySort1('data-sorts');
    };*/
    //mySort1('data-sort');
    /*функция фильтра методом пузырька по увеличению цены*/
    function mySort1(SortType) {
        //alert(SortType);
        let nav1 = document.querySelector('#navs');
        console.log(nav1);
        for (let i = 0; i < nav1.children.length; i++) {
            for (let j = i; j < nav1.children.length; j++) {

                if (+nav1.children[i].getAttribute(SortType) > +nav1.children[j].getAttribute(SortType)){
                    replaceDNode = nav1.replaceChild(nav1.children[j], nav1.children[i]);//перезаписываю элемент
                    insertAfter(replaceDNode, nav1.children[i]);//вставляю перезаписаный элемент после записанного

                }
            }
        }
    }
    /*функция фильтра методом пузырька по уменьшению цены*/
    function mySortDesc(SortType) {
        //alert('дорогое');
        let nav1 = document.querySelector('#navs');
        console.log(nav1);
        for (let i = 0; i < nav1.children.length; i++) {
            for (let j = i; j < nav1.children.length; j++) {

                if (+nav1.children[i].getAttribute(SortType) < +nav1.children[j].getAttribute(SortType)){
                    replaceDNode = nav1.replaceChild(nav1.children[j], nav1.children[i]);//перезаписываю элемент
                    insertAfter(replaceDNode, nav1.children[i]);//вставляю перезаписаный элемент после записанного

                }
            }
        }
    }

    /*функция фильтра методом пузырька по рейтингу*/
    function mySortRating(SortType) {
        //alert('дорогое');
        let nav1 = document.querySelector('#navs');
        console.log(nav1);
        for (let i = 0; i < nav1.children.length; i++) {
            for (let j = i; j < nav1.children.length; j++) {

                if (+nav1.children[i].getAttribute(SortType) < +nav1.children[j].getAttribute(SortType)){
                    replaceDNode = nav1.replaceChild(nav1.children[j], nav1.children[i]);//перезаписываю элемент
                    insertAfter(replaceDNode, nav1.children[i]);//вставляю перезаписаный элемент после записанного

                }
            }
        }
    }

    /*функция фильтра методом пузырька по id*/
    function mySortID(SortType) {
        //alert(SortType);
        let nav1 = document.querySelector('#navs');
        console.log(nav1);
        for (let i = 0; i < nav1.children.length; i++) {
            for (let j = i; j < nav1.children.length; j++) {

                if (+nav1.children[i].getAttribute(SortType) > +nav1.children[j].getAttribute(SortType)){
                    replaceDNode = nav1.replaceChild(nav1.children[j], nav1.children[i]);//перезаписываю элемент
                    insertAfter(replaceDNode, nav1.children[i]);//вставляю перезаписаный элемент после записанного

                }
            }
        }
    }

    function insertAfter(elem, refElem) {
        return refElem.parentNode.insertBefore(elem,refElem.nextSibling)
    }
</script>

{{--описание фильтра по категориям--}}
<script>

    function Categorii_product(idProduct) {
        //alert(idProduct);
        var c = idProduct;
        //alert(c);
            $('.item').addClass('hide');
            $('.mur-'+c).removeClass('hide');

    }

    function Categorii_productAll() {
        let f = [1,2,3,4,5,6,7,8,9,10,11,12];
        $('.item').addClass('hide');
        $('.mur-'+f).removeClass('hide');

        for(let i=0; i<f.length; i++){

            $('.mur-'+f[i]).removeClass('hide');

        }
    }
</script>

