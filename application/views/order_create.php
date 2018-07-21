<div id="page-wrapper">  
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Order</h1>
          <div class="panel panel-default">
              <div class="panel-heading">
                 Order Form
              </div>
              <div class="panel-body">
                
                  <div class="col-lg-12">
                  <!-- CONTENT STARTS HERE -->
                  <div class="row justify-column-between">
                    <div class="form-group col-lg-4">
                      <img src="https://s3.envato.com/files/237475382/326_shirt_bright-1.jpg" class="img-thumbnail" alt="Responsive image">
                    </div>
                    <div class="form-group col-lg-8">
                      <div class="row justify-column-between">
                        <div class="form-group col-lg-4">
                          <label for="">Job Name</label>
                          <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-lg-4">
                          <label>Customer</label>
                          <select class="form-control">
                              <option>Syukri</option>
                              <option>Wowo</option>
                              <option>Kevin</option>
                              <option>Achmad</option>
                              <option>Bayu</option>
                          </select>
                        </div>
                      </div>
                   
                        <div class="row justify-column-between">
                          <div class="form-group col-lg-4">
                            <label for="">Date</label>
                            <input class="form-control" id="orderdate" type="text">
                            <script>
                            $( function() {
                              $( "#orderdate" ).datepicker({ "dateFormat": "dd/mm/yy"});
                            } );
                            </script>  
                          </div>
                          <div class="form-group col-lg-4">
                            <label for="">Due Date</label>
                            <input class="form-control" id="duedate" type="text">
                            <script>
                            $( function() {
                              $( "#duedate" ).datepicker({ "dateFormat": "dd/mm/yy"});
                            } );
                            </script>  
                          </div>

                        </div>
                  
                    </div>
                
                  </div>

                  <div class="row">
                    <div class="panel panel-default">
                      <div class="panel-heading">Decorations</div>
                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Side</th>
                                <th>Method</th>
                                <th>Size & Location</th>
                                <th>Filename</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>Front</td>
                                <td>Silkscreen</td>
                                <td class="center">A4-Landscape 2.5</td>
                                <td class="center">depan.jpg</td>
                            </tr>
                            <tr class="even gradeC">
                                <td>2</td>
                                <td>Back</td>
                                <td>Silkscreen</td>
                                <td class="center">A3-Landscape 4"</td>
                                <td class="center">belakang.jpg</td>
                            </tr>
                            <tr class="odd gradeA">
                                <td>3</td>
                                <td>Left Sleeve</td>
                                <td>Heatpress - Vinyl</td>
                                <td class="center">Name - S</td>
                                <td class="center">sleeve.jpg</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="row">
                    <div class="panel panel-default">
                      <div class="panel-heading">Garments</div>
                      <table width="100%" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Garment</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>Rians Basic RN</td>
                                <td>Black</td>
                                <td class="center">XS</td>
                                <td class="center">10</td>
                            </tr>
                            <tr class="even gradeC">
                                <td>2</td>
                                <td>Rians Basic RN</td>
                                <td>Black</td>
                                <td class="center">M</td>
                                <td class="center">25</td>
                            </tr>
                            <tr class="even gradeA">
                                <td>2</td>
                                <td>Rians Basic RN</td>
                                <td>Black</td>
                                <td class="center">L</td>
                                <td class="center">25</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- CONTENT ENDS HERE -->

                </div>
              </div>
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>





