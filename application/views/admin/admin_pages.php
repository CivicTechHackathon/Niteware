<div class="col-sm-10">
         <div class="container-fluid">
            <span><h2 id="pages-heading">Pages</h2> <button class="btn btn-primary">Add New</button></span>
            <br><br>
            <div class="row">
                <a href="#">All (49)</a> | <a href="#">Mine (18)</a> | <a href="#">Published (19)</a> | <a href="#">Draft (4)</a>
                | <a href="#">Trash (2)</a>
            </div>
            <div class="row">
                <form action="somfile.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <select name="bulk-option" id="bulk-option" class="form-control">
                                <option value="bulk">Bulk Option</option>
                                <option value="edit">Edit</option>
                                <option value="move-to-trash">Move to Trash</option>
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <button class="btn btn-default form-control">Apply</button>
                        </div>
                        <div class="col-sm-2">
                                <select name="pages-query-by-date" id="pages-query" class="form-control">
                                        <option value="bulk">All Dates</option>
                                        <option value="November-17">November 2017</option>
                                        <option value="August-2017">August 2017</option>
                                        <option value="November-17">November 2017</option>
                                        <option value="August-2017">August 2017</option>
                                    </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="checkbox" name="page"> ACM AKSC'17
                                <br><span class="shortcuts"><a href="#">Edit</a> | <a href="#">Delete</a> |
                            <a href="#">Trash</a> | <a href="#">Duplicate</a></span> </td>
                            <td>Muhammad Shariq</td>
                            <td>2017/12/3</td>
                            <td>Published</td>
                        </tr>
                        <tr>
                                <td><input type="checkbox" name="page"> ACM AKSC'17
                                        <br><span class="shortcuts"><a href="#">Edit</a> | <a href="#">Delete</a> |
                                    <a href="#">Trash</a> | <a href="#">Duplicate</a></span> </td>
                                <td>Muhammad Shariq</td>
                                <td>2017/12/3</td>
                                <td>Published</td>
                            </tr>
                            <tr>
                                    <td><input type="checkbox" name="page"> ACM AKSC'17
                                            <br><span class="shortcuts"><a href="#">Edit</a> | <a href="#">Delete</a> |
                                        <a href="#">Trash</a> | <a href="#">Duplicate</a></span> </td>
                                    <td>Muhammad Shariq</td>
                                    <td>2017/12/3</td>
                                    <td>Published</td>
                                </tr>
                                <tr>
                                        <td><input type="checkbox" name="page"> ACM AKSC'17
                                                <br><span class="shortcuts"><a href="#">Edit</a> | <a href="#">Delete</a> |
                                            <a href="#">Trash</a> | <a href="#">Duplicate</a></span> </td>
                                        <td>Muhammad Shariq</td>
                                        <td>2017/12/3</td>
                                        <td>Published</td>
                                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <ul class="pagination pagination-sm pull-right">
                    <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
         </div>
     </div>
    </div>
    </div>