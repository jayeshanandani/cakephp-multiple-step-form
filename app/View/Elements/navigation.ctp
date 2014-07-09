<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Mapping the Private Sector Skill Development Initiative : In-house Corporate</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><?php  echo $this->Html->link(__("Interviews"),array('controller' => 'interviews', 'action' => 'index')) ?></li>
            <li><?php  echo $this->Html->link(__("Planned Training"),array('controller' => 'interview_trainings', 'action' => 'index','planned')) ?></li>
            <li><?php  echo $this->Html->link(__("Unplanned Training"),array('controller' => 'interview_trainings', 'action' => 'index','unplanned')) ?></li>
            <li><?php  echo $this->Html->link(__("Innovations"),array('controller' => 'interview_innovations', 'action' => 'index')) ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </nav>