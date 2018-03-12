<h2>Tabbed Content</h2>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
    elit. Aenean commodo ligula eget dolor. Aenean massa. 
    Cum sociis natoque penatibus et magnis dis parturient 
    montes, nascetur ridiculus mus. Donec quam felis, 
    ultricies nec, pellentesque eu, pretium quis, sem.

</p>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Simple Text
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Two Column Lists</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">Simple Table</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
            elit. Aenean commodo ligula eget dolor. Aenean massa. 
            Cum sociis natoque penatibus et magnis dis parturient 
            montes, nascetur ridiculus mus. Donec quam felis, 
            ultricies nec, pellentesque eu, pretium quis, sem.</p>

    </div>
    <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
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
    <div class="tab-pane fade table-responsive-sm" id="third" role="tabpanel" aria-labelledby="third-tab">
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
</div>
