<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link text-break active" id="tab-01" data-toggle="tab" href="#item-01" role="tab" aria-controls="item-01" aria-selected="true">
            <i class="fas fa-align-left"></i>
            <span class="d-none d-sm-inline"><span class="d-none d-xl-inline">Simple</span> Text</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-break" id="tab-02" data-toggle="tab" href="#item-02" role="tab" aria-controls="item-02" aria-selected="false">
            <i class="fas fa-th-list"></i>
            <span class="d-none d-sm-inline"><span class="d-none d-xl-inline">Two Column</span> Lists</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-break" id="tab-03" data-toggle="tab" href="#item-03" role="tab" aria-controls="item-03" aria-selected="false">
            <i class="fas fa-table"></i>
            <span class="d-none d-sm-inline"><span class="d-none d-xl-inline">Simple</span> Table</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link text-break" id="tab-04" data-toggle="tab" href="#item-04" role="tab" aria-controls="item-04" aria-selected="false">
            <i class="fab fa-wpforms"></i>
            <span class="d-none d-sm-inline"><span class="d-none d-xl-inline">Simple</span> Form</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link text-break" id="tab-05" data-toggle="tab" href="#item-05" role="tab" aria-controls="item-05" aria-selected="false">
            <i class="fas fa-map"></i>
            <span class="d-none d-sm-inline"><span class="d-none d-xl-inline">Google</span> Map</span>
        </a>
    </li>
</ul>
<div class="tab-content mb-5" id="myTabContent">
    <div class="tab-pane fade show active" id="item-01" role="tabpanel" aria-labelledby="tab-01">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
            elit. Aenean commodo ligula eget dolor. Aenean massa. 
            Cum sociis natoque penatibus et magnis dis parturient 
            montes, nascetur ridiculus mus. Donec quam felis, 
            ultricies nec, pellentesque eu, pretium quis, sem.</p>

    </div>
    <div class="tab-pane fade" id="item-02" role="tabpanel" aria-labelledby="tab-02">
        <div class="row">
            <div class="col-sm-6">
                <ol class="list-group">
                    <?php include('includes/modules/list-simple-items.php'); ?>
                </ol>
            </div>
            <div class="col-sm-6">
                <ol class="list-group">
                    <?php include('includes/modules/list-simple-items.php'); ?>
                </ol>
            </div>
        </div>


    </div>
    <div class="tab-pane fade table-responsive-sm" id="item-03" role="tabpanel" aria-labelledby="tab-03">
        <table class="table">
            <thead>
            <th scope="col">Entry Header 1</th>
            <th scope="col">Entry Header 2</th>
            <th scope="col">Entry Header 3</th>
            <th scope="col">Entry Header 4</th>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Entry First Line 1</th>
                    <td>Entry First Line 2</td>
                    <td>Entry First Line 3</td>
                    <td>Entry First Line 4</td>
                </tr>
                <tr>
                    <th scope="row">Entry Line 1</th>
                    <td>Entry Line 2</td>
                    <td>Entry Line 3</td>
                    <td>Entry Line 4</td>
                </tr>
                <tr>
                    <th scope="row">Entry Last Line 1</th>
                    <td>Entry Last Line 2</td>
                    <td>Entry Last Line 3</td>
                    <td>Entry Last Line 4</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="item-04" role="tabpanel" aria-labelledby="tab-04">
        <?php include('includes/forms/form-contact.php'); ?>
    </div>
    <div class="tab-pane fade google-map" id="item-05" role="tabpanel" aria-labelledby="tab-05">
        <?php include('includes/elements/google-map.php'); ?>
    </div>
</div>
