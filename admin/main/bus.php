<?php 
include('header.php');
include('topnavbar.php');
include('menu.php');
?>
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bootstrap Simple Table</h4>
                                <h6 class="card-subtitle">Simple table example</h6>
                                <table data-toggle="table" data-height="250" data-mobile-responsive="true" class="table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Stars</th>
                                            <th>Forks</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="tr-id-1" class="tr-class-1">
                                            <td id="td-id-1" class="td-class-1"> bootstrap-table </td>
                                            <td>526</td>
                                            <td>122</td>
                                            <td>An extended Bootstrap table with radio, checkbox, sort, pagination, and other added features. (supports twitter bootstrap v2 and v3) </td>
                                        </tr>
                                        <tr id="tr-id-2" class="tr-class-2">
                                            <td id="td-id-2" class="td-class-2"> multiple-select </td>
                                            <td>288</td>
                                            <td>150</td>
                                            <td>A jQuery plugin to select multiple elements with checkboxes :) </td>
                                        </tr>
                                        <tr id="tr-id-3" class="tr-class-3">
                                            <td id="td-id-3" class="td-class-3"> bootstrap-show-password </td>
                                            <td>32</td>
                                            <td>11</td>
                                            <td>Show/hide password plugin for twitter bootstrap. </td>
                                        </tr>
                                        <tr id="tr-id-4" class="tr-class-4">
                                            <td id="td-id-4" class="td-class-4"> blog </td>
                                            <td>13</td>
                                            <td>4</td>
                                            <td>my blog</td>
                                        </tr>
                                        <tr id="tr-id-5" class="tr-class-5">
                                            <td id="td-id-5" class="td-class-5"> scutech-redmine
                                                <td>6</td>
                                                <td>3</td>
                                                <td>Redmine notification tools for chrome extension.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bootstrap Data From js</h4>
                                <h6 class="card-subtitle">Sample data From js</h6>
                                <table id="smptable" class="table">
                                    <thead>
                                        <tr>
                                            <th data-field="name">Name</th>
                                            <th data-field="stargazers_count">Stars</th>
                                            <th data-field="forks_count">Forks</th>
                                            <th data-field="description">Description</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sortable table</h4>
                                <h6 class="card-subtitle">Basic sortable table</h6>
                                <table data-toggle="table" data-url="https://api.github.com/users/wenzhixin/repos?type=owner&sort=full_name&direction=asc&per_page=100&page=1" data-sort-name="stargazers_count" data-height="280" data-mobile-responsive="true" data-sort-order="desc" class="table">
                                    <thead>
                                        <tr>
                                            <th data-field="name" data-sortable="true"> Name </th>
                                            <th data-field="stargazers_count" data-sortable="true" data-width="100"> Stars </th>
                                            <th data-field="forks_count" data-sortable="true" data-width="100"> Forks </th>
                                            <th data-field="description" data-sortable="true"> Description </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sortable table</h4>
                                <h6 class="card-subtitle">Basic sortable table</h6>
                                <table id="clmtable" data-show-columns="true" data-height="300">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
<?php
include('footer.php');
?>