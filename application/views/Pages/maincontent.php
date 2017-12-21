<div class="page-content-wrapper ">
    <div >
        <table id="table1">
            <tr>
                <td id="td1"><button class="btn btn-warning" >Update/Delete</button></td>
                <td id="td2"><button class="btn btn-danger" id="myBtn">Add Product</button></td>
            </tr>
        </table>
    </div>

                        <div class="row">
                               <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <span class="panel-body"><i class="fa fa-2x text-white">Product Name</i></span>
                            
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter">8,457 Kg</span>
                                
                            </div>
                        </div>
                    </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <span class="panel-body"><i class="fa fa-2x text-white">Item Product</i></span>
                            
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter">8,457 Kg</span>
                                
                            </div>
                        </div>
                    </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <span class="panel-body"><i class="fa fa-2x text-white">Item Product</i></span>
                            
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter">8,457 Kg</span>
                                
                            </div>
                        </div>
                    </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <span class="panel-body"><i class="fa fa-2x text-white">Item Product</i></span>
                            
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter">8,457 Kg</span>
                                
                            </div>
                        </div>
                    </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <span class="panel-body"><i class="fa fa-2x text-white">Item Product</i></span>
                            
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter">8,457 Kg</span>
                                
                            </div>
                        </div>
                    </div>
                   
                    
                            </div>
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <a>Add New Product</a>
    
                        <form class="form-horizontal m-t-20" action="<?php echo base_url();?>welcome/product_add" method="post">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="product_name" required="" placeholder="Product Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" name="product_quentity" type="text" required="" placeholder="Quentity">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" name="product_price" type="text" required="" placeholder="Price">
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
  </div>

</div>


                    </div> <!-- Page content Wrapper -->
                    
                    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
                  
                    
