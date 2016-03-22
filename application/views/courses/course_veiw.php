<div class="parallax bg-white page-section third">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media v-middle media-overflow-visible">
            <div class="media-left">
                <!-- <span class="icon-block s30 bg-lightred"><i class="fa fa-github"></i></span> !-->
            </div>
            <div class="media-body">
                <div class="text-headline"><?php echo $course->name; ?></div>
            </div>
            <div class="media-right">
                <!--<div class="dropdown">
                    <a class="btn btn-white dropdown-toggle" data-toggle="dropdown" href="#">Course <span class="caret"></span></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="">Something</a></li>
                        <li><a href="">Something else</a></li>
                    </ul>
                </div>!-->
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-section">
        <div class="row">
            <div class="col-md-9">
                <div class="page-section padding-top-none">
                    <!--<div class="media media-grid v-middle">
                        <div class="media-left">
                            <span class="icon-block half bg-blue-300 text-white">2</span>
                        </div>
                        <div class="media-body">
                            <h1 class="text-display-1 margin-none">The MVC architectural pattern</h1>
                        </div>
                    </div>
                    <br/>
                    <p class="text-body-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta eius enim inventore minus optio ratione veritatis. Beatae deserunt illum ipsam magni minima mollitia officiis quia tempora! Aliquid autem beatae, dignissimos exercitationem illum, incidunt itaque libero, minima molestiae necessitatibus perferendis quae quas quidem recusandae sit! Esse maxime porro provident quasi?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis, ducimus, ea eaque earum eius enim eos explicabo facilis harum impedit natus nemo, nobis obcaecati omnis perspiciatis praesentium quaerat quas quod reprehenderit sapiente temporibus vel voluptatem voluptates voluptatibus?</p>!-->
                </div>
                <!--<h5 class="text-subhead-2 text-light">Curriculum</h5>!-->
                <div class="panel panel-default curriculum open paper-shadow" data-z="0.5">
                    <!-- <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-1">
                        <div class="media">
                            <div class="media-left">
                                <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
                            </div>
                            <div class="media-body">
                                <h4 class="text-headline">Chapter 1</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                            </div>
                        </div>
                        <span class="collapse-status collapse-open">Open</span>
                        <span class="collapse-status collapse-close">Close</span>
                    </div> !-->
                    <div class="list-group collapse in" id="curriculum-1">
                        <?php foreach ($course->topics as $topic): ?>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">1.</div>
                                </div>
                                <div class="media-body">
                                    <!-- <i class="fa fa-fw fa-circle text-green-300"></i> !-->
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> <?php echo $topic->name; ?>
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">2:03 min</div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>


                <br/>
                <br/>
            </div>
            <div class="col-md-3">

                <!-- <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                     <div class="panel-heading panel-collapse-trigger">
                         <h4 class="panel-title">Resources</h4>
                     </div>
                     <div class="panel-body list-group">
                         <ul class="list-group list-group-menu">
                             <li class="list-group-item active"><a class="link-text-color" href="website-take-course.html">Curriculum</a></li>
                             <li class="list-group-item"><a class="link-text-color" href="website-course-forums.html">Course Forums</a></li>
                             <li class="list-group-item"><a class="link-text-color" href="website-take-quiz.html">Take Quiz</a></li>
                             <li class="list-group-item"><a class="link-text-color" href="website-quiz-results.html">Quiz Results</a></li>
                         </ul>
                     </div>
                 </div> !-->
                <!-- .panel -->
                <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-heading">
                        <h4 class="text-headline">Course</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-caption">
                            <i class="fa fa-clock-o fa-fw"></i> 4 hrs &nbsp;
                            <i class="fa fa-calendar fa-fw"></i> 21/10/14
                            <br/>
                            <i class="fa fa-user fa-fw"></i> Instructor: Adrian Demian
                            <br/>
                            <i class="fa fa-mortar-board fa-fw"></i> Max. students: 50
                            <br/>
                            <i class="fa fa-check fa-fw"></i> Attending: 30
                        </p>
                    </div>
                    <?php if ($has_access === FALSE): ?>

                        <hr class="margin-none" />
                        <div class="panel-body text-center">
                            <p>
                                <a class="btn btn-success btn-lg paper-shadow relative" data-z="1" data-hover-z="2" data-animated href="<?php echo base_url('orders/add/'.$course->id); ?>">Start Course</a>
                            </p>
                <!-- <p class="text-body-2">or <a href="#">buy course for $1</a></p> !-->
                        </div>


                    <?php endif; ?>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                        </li>
                    </ul>
                </div>
                <!-- // END .panel -->
                <!-- .panel -->
                <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                    <div class="panel-heading panel-collapse-trigger">
                        <h4 class="panel-title">Instructor</h4>
                    </div>
                    <div class="panel-body">
                        <div class="media v-middle">
                            <div class="media-left">
                                <img src="images/people/110/guy-6.jpg" alt="About Adrian" width="60" class="img-circle" />
                            </div>
                            <div class="media-body">
                                <h4 class="text-title margin-none"><a href="#">Adrian Demian</a></h4>
                                <span class="caption text-light">Biography</span>
                            </div>
                        </div>
                        <br/>
                        <div class="expandable expandable-indicator-white expandable-trigger">
                            <div class="expandable-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aut consectetur consequatur cum cupiditate debitis doloribus, error ex explicabo harum illum minima mollitia nisi nostrum officiis omnis optio qui quisquam saepe sit sunt totam vel velit voluptatibus? Adipisci ducimus expedita id nostrum quas quia!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
