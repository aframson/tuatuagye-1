<?php 


include 'db.php';

$value = $_POST['data'];

$search = mysqli_query($con,"SELECT * FROM products WHERE show_name LIKE '%".$value."%' ");


if (mysqli_num_rows($search) > 1) {
    
    while ($row = mysqli_fetch_array($search)) {
        echo '
        <script>
        $(".name").click(function (params) {
             
            $(".hero-section").fadeOut(300);
            $(".searchdrop").fadeOut(300)
        
            var id =this.id;
            var splitid = id.split(":");
            var mainId = splitid[1];
    
            $.ajax({
                url:"showsearch",
                method:"post",
                dataType:"text",
                data:{mainid:mainId},
                beforeSend:function (params) {
                    
                },
                success:function (response) {
                    
                    $("#urow").html(response);
             }
            })
    
    
    
        })
        </script>
        <div  class="elems">
           
            <img src="img/items/'.$row['name'].'" class="elemimg">
            <div id="id:'.$row['id'].'" class="name">
            <span class="ltxt">'.$row['show_name'].'</span>
            <div class="cate"><i>category</i></div>
            </div>
        
         </div>
     ';
}
}else{
    echo "<div class='errorx'>Oops no results !!</div>";
}

