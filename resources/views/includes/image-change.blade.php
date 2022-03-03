<style>
    .small-image {
        height: 100px!important;
        width: 100px!important;
        cursor: pointer;
    }
</style>


<div id="bigpic" class="ml-5" style="height: 400px; width: 600px">
    <img src="{{ asset('assets/img/1.jpg') }}" id="mainImage" alt="" class="img-fluid h-100">
</div>
<div class="ml-5 mt-2">
    <img src="{{ asset('assets/img/1.jpg') }}" class="small-image mr-2" id="smallImage1" alt="">
    <img src="{{ asset('assets/img/2.jpg') }}" class="small-image mr-2" id="smallImage2" alt="">
    <img src="{{ asset('assets/img/4.jpg') }}" class="small-image mr-2" id="smallImage3" alt="">
    <img src="{{ asset('assets/img/6.jpg') }}" class="small-image mr-2" id="smallImage4" alt="">
</div>


<script>
    var smallImage = document.getElementById('smallImage1');
    var mainImage = document.getElementById('mainImage');
    smallImage.onclick = function () {
        var imgUrl = smallImage1.getAttribute('src');
        mainImage.setAttribute('src', imgUrl);
    }
    var smallImage2 = document.getElementById('smallImage2');
    var mainImage = document.getElementById('mainImage');
    smallImage2.onclick = function () {
        var imgUrl = smallImage2.getAttribute('src');
        mainImage.setAttribute('src', imgUrl);
    }
    var smallImage3 = document.getElementById('smallImage3');
    var mainImage = document.getElementById('mainImage');
    smallImage3.onclick = function () {
        var imgUrl = smallImage3.getAttribute('src');
        mainImage.setAttribute('src', imgUrl);
    }
    var smallImage4 = document.getElementById('smallImage4');
    var mainImage = document.getElementById('mainImage');
    smallImage4.onclick = function () {
        var imgUrl = smallImage4.getAttribute('src');
        mainImage.setAttribute('src', imgUrl);
    }

</script>
