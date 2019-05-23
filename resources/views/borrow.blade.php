<!--Header File Included Here-->
@include('header')

<body id="page-top" onload="makeTableScroll(); make2TableScroll();">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!--Sidebar Included Here-->
  @include('sidebar')
  <!--Sidebar Included Here-->

                  
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mr-auto ml-md-3 my-2 my-md-0 mw-100">
            <h1 class="h3 mb-0 text-gray-800">Lend A Book</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwidvcjos47hAhXCAnIKHe3wDV8QjRx6BAgBEAU&url=https%3A%2F%2Fwww.independent.co.uk%2Farts-entertainment%2Ffilms%2Fnews%2Fjohnny-depp-recalls-what-he-told-disney-bosses-confused-by-jack-sparrow-didnt-you-know-all-my-a6728081.html&psig=AOvVaw2lx775rse9i7Sr0OblkTxV&ust=1553091747218036">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"   class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                   <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                   Logout
                  </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
                 </form>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Content Row -->
        @if(session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
        @endif
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Select The Book</h6>
                <div class="col-auto">
                      <i class="fas fa-book fa-1x text-gray-300"></i>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-- book Search -->
                    <form class="form-inline my-2 my-lg-0">
                        <div class="">
                        <input type="text" name="search1" id="search1" class="form-control mr-md-2" placeholder="Search for the Book " aria-label="Search" aria-describedby="basic-addon2">
                        
                        </div>
                    </form>
                    <!-- divider -->
                    <div class="dropdown-divider"></div>
                    <div class="scrollingTable" >
                    <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody id="tbody1" name="tbody1">
                        
                    </tbody>
                </table>
                </div>
                        
                </div>
            </div>
            </div>
            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Select The Student</h6>
                <div class="col-auto">
                      <i class="fas fa-user fa-1x text-gray-300"></i>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 <!-- member Search -->
                 <form class="form-inline my-2 my-lg-0">
                        <div class="">
                        <input type="text" name="search2" id="search2" class="form-control mr-md-2" placeholder="Search for the Student " aria-label="Search" aria-describedby="basic-addon2">
                        
                        </div>
                    </form>
                    <!-- divider -->
                    <div class="dropdown-divider"></div>
                    <div class="scrollingTable" >
                    <table id="myTable1" class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Member Name</th>
                            <th>Address</th>
                            <th>Tel</th>
                        </tr>
                    </thead>
                    <tbody id="tbody2" name="tbody2">
                        
                    </tbody>
                </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        
          <!-- Content Row -->
          <div class="row">
           <!-- Total Members -->
           <div class="col-xl-12 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <form method ="POST" action="{{ url('/insert') }}">
                          {{csrf_field()}}
                          <fieldset>
                          @if(count($errors) >0 )
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                            @endforeach
                          @endif
                            <div class="form-group row">
                            <div class="form-group col-sm-5">
                              <div class="row">
                              Book ID: <input type="text" class="form-control form-control-sm" placeholder="@id" name="bookId" id="bookId">
                              </div>
                              <div class="row">
                              Book Name: <input type="text" class="form-control form-control-sm" placeholder="@BookName" name="bname" id="bname">
                              </div>
                              <div class="row">
                              Author: <input type="text" class="form-control form-control-sm" placeholder="@Author" name="bauthor" id="bauthor">
                              </div>
                              <div class="row">
                              Category: <input type="text" class="form-control form-control-sm" placeholder="@no" name="bno" id="bno">
                              </div>
                            </div>
                            <div class="form-group col-sm-1" ></div>
                            <div class="form-group col-sm-5">
                            <div class="row">
                              Member ID: <input type="text" class="form-control form-control-sm" placeholder="@id" name="MemberID" id="MemberID">
                              </div>
                              <div class="row">
                              Member Name: <input type="text" class="form-control form-control-sm" placeholder="@memberName" name="mname" id="mname">
                              </div><br><br>
                              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                            </div>
                          </fieldset>
                          </form>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; ITPM PROJECT 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <script>
  $("#tbody1").on('click','.btn',function(){
    var currow = $(this).closest('tr');
    var col1 = currow.find('td:eq(0)').text();
    var col2 = currow.find('td:eq(1)').text();
    var col3 = currow.find('td:eq(2)').text();
    var col4 = currow.find('td:eq(3)').text();
    // var result = col1+'\n'+col2+'\n'+col3+'\n'+col4;
    $("#bookId").val(col1);
    $("#bname").val(col2);
    $("#bauthor").val(col3);
    $("#bno").val(col4);
    // alert(result);
  })
  </script>
   <script>
  $("#tbody2").on('click','.btn',function(){
    var currow = $(this).closest('tr');
    var col1 = currow.find('td:eq(0)').text();
    var col2 = currow.find('td:eq(1)').text();
    $("#MemberID").val(col1);
    $("#mname").val(col2);
  })
  </script>

</body>

</html>


<!-- Search Script -->
<script>
$(document).ready(function(){

 fetch_student_data();

 function fetch_student_data(query = '')
 {
  $.ajax({
   url:"{{ route('borrow.searchmember') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#tbody2').html(data.table_data);
    $('#total_records2').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search2', function(){
  var query = $(this).val();
  fetch_student_data(query);
 });
});
</script>
<script>
$(document).ready(function(){

 fetch_customer1_data();

 function fetch_customer1_data(query = '')
 {
  $.ajax({
   url:"{{ route('borrow.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#tbody1').html(data.table_data);
    $('#total_records1').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search1', function(){
  var query = $(this).val();
  fetch_customer1_data(query);
 });
});
</script>

     <!-- table 1 script -->
 <script type="text/javascript">
        function makeTableScroll() {
            // Constant retrieved from server-side via JSP
            var maxRows = 4;

            var table = document.getElementById('myTable');
            var wrapper = table.parentNode;
            var rowsInTable = table.rows.length;
            var height = 0;
            if (rowsInTable > maxRows) {
                for (var i = 0; i < maxRows; i++) {
                    height += table.rows[i].clientHeight;
                }
                wrapper.style.height = height + "px";
            }
        }
    </script>

     <!-- table 2 script -->
 <script type="text/javascript">
        function make2TableScroll() {
            // Constant retrieved from server-side via JSP
            var maxRows = 4;

            var table = document.getElementById('myTable1');
            var wrapper = table.parentNode;
            var rowsInTable = table.rows.length;
            var height = 0;
            if (rowsInTable > maxRows) {
                for (var i = 0; i < maxRows; i++) {
                    height += table.rows[i].clientHeight;
                }
                wrapper.style.height = height + "px";
            }
        }
    </script>
    

    <!-- alert script -->
    <script>
          $('div.alert').delay(2000).slideUp(300);
        </script>

<!-- popup style -->
<style type="text/css">
   table {
    width:  100%;
    border-collapse: collapse;
   }
        td {
            border: 0px solid black;
        }
        .scrollingTable {
            width: 30em;
            overflow-y: auto;
        }

        table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            }
            table tr:not(:first-child):hover{background-color: #ddd;}
</style>
