<?php

    $title = "Reviews | Peer Point"; //title for header

     //include header which uses title
    include_once("../inc/header.php");

    //include left-side menu 
    include_once("../inc/menu.php");

    //including navigation header
    include_once("../inc/nav.php");

    //include mobile device styling
    include_once("../inc/mobile.php");

?>
        <!-- Static Table Start -->
        
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table
                                        id="table-donor" 
                                        data-pagination="true" 
                                        data-search="true" 
                                        data-show-refresh="true"
                                        data-show-columns="true"
                                        data-show-pagination-switch="true" 
                                        data-show-refresh="true"
                                        data-key-events="true"
                                        data-show-toggle="true"
                                        data-resizable="true"
                                        data-cookie="true"
                                        data-cookie-id-table="saveId"
                                        data-show-export="true"
                                        data-click-to-select="true"
                                        data-toolbar="#toolbar"
                                        data-auto-refresh-interval
                                        >
                                        <thead>
                                            <tr>
                                            
                                            <th data-field="author">Author</th>
                                            <th data-field="dateCreated">Date</th>
                                            <th data-field="label" >Sentiment</th>
                                            <th data-field="vidID">Video ID</th>
                                            </tr>
                                        </thead>
                                        <tbody id="staff"></tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->

<?php
    //include footer
    include_once("../inc/footer.php");
?>