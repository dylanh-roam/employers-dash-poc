<div class="panel panel-default">
    <div class="panel-heading">
        <div class="input-group ">
            <input type="text" class="form-control" placeholder="Start typing to search for candidates">
            <span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button></span>
        </div><!-- /input-group -->

        <hr/>
        <div class="clearfix"></div>
        <div class="">
            <h4>Filter Applicant</h4>
            <div class="form-group">
                <label>
                    <input type="checkbox" class="">&nbsp; Select All
                </label>
            </div>

            <div class="form-group">

                <label>
                    APPLY ACTION
                </label>
                <div>
                <select class="selectpicker form-control">
                    <optgroup label="Move To">
                        <option>Rejected</option>
                        <option>In Review</option>
                        <option>Shortlisted</option>
                    </optgroup>

                </select>
                </div>
            </div>

        </div>
    </div>
    <div class="panel-body">


        @for ($i=0;$i<11;$i++)
            <div class='row' style="padding-top: 5pt; padding-bottom: 5pt; border: 1pt solid lightgray">
                <div>

                    <div class="col-md-1 checkbox">
                        <label>
                            <input type="checkbox" class="">
                        </label>
                    </div>
                    <div class="col-md-4">
                        <img src="http://placehold.it/300x300" alt="..." class="img-circle img-responsive">
                    </div>
                    <div class="col-md-7">
                        <div class="pull-right">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </div>

                        <div class="strong">Name Surname</div>
                        <div>Job</div>
                        <div class="small">Qualification</div>
                    </div>
                </div>
            </div>
        @endfor
        <div class="text-center">

            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</div>
<br>
