<?php
/* Smarty version 3.1.32, created on 2018-05-25 16:55:51
  from '/Users/user/Documents/project/salte/design/s-alte/html/topic/timer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0815e7dcb248_48251260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9b2a871be9d4255c77677716157bc6626e4e9bf' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/topic/timer.tpl',
      1 => 1527256549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0815e7dcb248_48251260 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-watch position-left"></i> Опитування по темі<a
                    class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
    </div>

    <div class="panel-body">
        <ul class="timer mb-10" id="clockdiv">
            <li>
                <div class="days"></div>
                 <span>Днів</span>
            </li>
            <li class="dots">:</li>
            <li>
                <div class="hours"></div>
                 <span>Годин</span>
            </li>
            <li class="dots">:</li>
            <li>
                <div class="minutes"></div>
                <span>Хвилин</span>
            </li>
        </ul>
    </div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['topic']->value->is_vote) {?>
<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-watch position-left"></i> Проголосувати:<a
                    class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
    </div>
    <div class="panel-body">
    <ul class="list-inline list-inline-condensed heading-text">
        <li><button type="button" class="btn border-success text-success-600 btn-flat btn-icon">За</button></li>
        <li><button type="button" class="btn border-primary text-primary-600 btn-flat btn-icon">Утриматися</button></li>
        <li><button type="button" class="btn border-warning text-warning-600 btn-flat btn-icon">Проти</button></li>
    </ul>
    </div>
</div>
<?php }
$_smarty_tpl->_assignInScope('total_vote', $_smarty_tpl->tpl_vars['vote']->value->vote_for->count+$_smarty_tpl->tpl_vars['vote']->value->vote_hold->count+$_smarty_tpl->tpl_vars['vote']->value->vote_yes->count);
if ($_smarty_tpl->tpl_vars['total_vote']->value > 0) {?>
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h6 class="panel-title"><i class="icon-files-empty position-left"></i> Результати голосування<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
        </div>

        <table class="table table-borderless table-xs content-group-sm">
            <tbody>
            <tr>
                <td>За:</td>
                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['vote']->value->vote_for->count;?>
</td>
            </tr>
            <tr>
                <td>Утримались:</td>
                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['vote']->value->vote_hold->count;?>
</td>
            </tr>
            <tr>
                <td>Проти:</td>
                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['vote']->value->vote_yes->count;?>
</td>
            </tr>
            </tbody>
        </table>
    </div>

<div class="panel panel-flat">
    <div class="sidebar-category">
        <div class="category-title">
            <span>Статистика голосування</span>
            <ul class="icons-list">
                <li><a href="#" data-action="collapse"></a></li>
            </ul>
        </div>
        <?php $_smarty_tpl->_assignInScope('vote_for', ((($_smarty_tpl->tpl_vars['vote']->value->vote_for->count*100)/$_smarty_tpl->tpl_vars['total_vote']->value)));?>
        <?php $_smarty_tpl->_assignInScope('vote_hold', ((($_smarty_tpl->tpl_vars['vote']->value->vote_hold->count*100)/$_smarty_tpl->tpl_vars['total_vote']->value)));?>
        <?php $_smarty_tpl->_assignInScope('vote_no', ((($_smarty_tpl->tpl_vars['vote']->value->vote_yes->count*100)/$_smarty_tpl->tpl_vars['total_vote']->value)));?>
        <div class="category-content">
            <ul class="progress-list">
                <li>
                    <label>За <span><?php echo round($_smarty_tpl->tpl_vars['vote_for']->value);?>
%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-success" style="width: <?php echo $_smarty_tpl->tpl_vars['vote_for']->value;?>
%">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </li>
                <li>
                    <label>Утримались <span><?php echo round($_smarty_tpl->tpl_vars['vote_hold']->value);?>
%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-primary" style="width: <?php echo $_smarty_tpl->tpl_vars['vote_hold']->value;?>
%">
                            <span class="sr-only">50% Complete</span>
                        </div>
                    </div>
                </li>
                <li>
                    <label>Проти <span><?php echo round($_smarty_tpl->tpl_vars['vote_no']->value);?>
%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $_smarty_tpl->tpl_vars['vote_no']->value;?>
%">
                            <span class="sr-only">80% Complete</span>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['topic']->value->end_date) {?>

<?php echo '<script'; ?>
>
    //Date.parse(new Date())
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
       // var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
           // 'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
       // var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            //secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline="January 01 2018 00:00:00 GMT+0300"; //for Ukraine
    var deadline = new Date(Date.parse('<?php echo $_smarty_tpl->tpl_vars['topic']->value->end_date;?>
')); // for endless timer
    initializeClock('clockdiv', deadline);
<?php echo '</script'; ?>
>

<?php }?>

<?php }
}
