<!-- ============= Model ============ -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: #2f2f2f;">All Products</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-hover table-bordered table-spriped">
         <thead style="color: #FFFFFF; background-color:#5FAB0E;">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>PRICE</th>
                 <th>SALE</th>
                 <th>CATEGORIES</th>

             </tr>
         </thead>
         <tbody>
         <?php
                include "functions/connect.php";
                $selectprod = "SELECT * FROM products";
                $queryprod = $conn -> query($selectprod);
                foreach($queryprod as $product){
            ?>
            <tr>
                <td><?=$product['id'] ?></td>
                <td><?=$product['name'] ?></td>
                <td><?=$product['price'] ?></td>
                <td><?=$product['sale'] ?></td>
                <td>
                    <?php
                        $cat_id = $product['cat_id'] ;
                        $selectCat = "SELECT name FROM cate WHERE id = $cat_id";
                        $queryCat = $conn -> query($selectCat);
                        $category = $queryCat -> fetch_assoc();
                        echo $category['name'];
                    ?>
                </td>
             </tr>
             <?php } ?>
         </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

