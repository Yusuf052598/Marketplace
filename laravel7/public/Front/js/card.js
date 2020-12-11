$(document).ready(function (){
    $('.quantity').attr('readonly','readonly');
    $('.minus').click(function (){
        let  price=$(this).parent('.count-table').prev().text();
        let count=$(this).next().val();
        if (count>1){
            count--;
            $(this).next().val(count);
            $(this).parent('.count-table').next().text(price*count);
            let total_sum=$('.summa').text();
            $('.summa').text(parseInt(total_sum)-price);
        }
        else {
            $(this).attr('disabled','disabled');
           // alert('Product kamida 1 ta bolish kerak');
        }
    });
    $('.pilus').click(function (){
        let  price=$(this).parent('.count-table').prev().text();
        let count=$(this).prev().val();
        if(count>=1){
            let a=$(this).prev();
            a.prev().attr('disabled',false);
        }
        if (count>0){
            count++;
            $(this).prev().val(count);
            $(this).parent('.count-table').next().text(price*count);
            let total_sum=$('.summa').text();
            $('.summa').text(parseInt(total_sum)+parseInt(price));
        }
        else {
            alert('Product kamida 1 ta bolish kerakk');
        }
    });
});

