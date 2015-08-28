<?php $this->assign('title', 'Vote et gagne'); ?>
<!--=== Content Part ===-->
<div class="container content">
    <div class="row magazine-page">
        <!-- Begin Content -->
        <div class="col-md-9">
        	<div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <?php if($use_votes_ladder == 1){ ?>
                        <div class="col-md-4">
                            <i class="fa fa-trophy"></i> <b>Top 5</b>
                            <br><br>
                            <table class="table top-5">
                                <tbody>
                                    <?php
                                    $nb = 0;
                                    foreach($data as $d){
                                        $nb++;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php
                                                if($nb == 1){
                                                    echo $nb.'<small>er</small>';
                                                }
                                                else{
                                                    echo $nb.'<small>ème</small>';
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $this->Html->image($d['User']['avatar'], ['class' => 'avatar-rounded', 'height' => 30, 'width' => 30]); ?> </td>
                                            <td>
                                                <b><?php echo $d['User']['username']; ?></b><br>
                                                <span class="text-muted"><small><?php echo $d['User']['votes']; ?> votes</small></span>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="vertical-separator"></div>
                        <?php } ?>
                        <?php if($use_votes_ladder == 1){ ?>
                        <div class="col-md-8">
                        <?php } else { ?>
                        <div class="col-md-12">
                        <?php } ?>
                            <div class="text-highlights text-highlights-light-blue">
                                <i class="fa fa-info-circle"></i>
                                <?php
                                if($nb_votes == 0){
                                    echo "Vous n'avez jamais voté pour le serveur";
                                }
                                else{
                                    echo "Vous avez voté $nb_votes fois, merci";
                                }
                                ?>
                            </div>
                            <center>
                                <p>
                                    <?php echo $votes_description; ?>
                                </p>
                                <hr>
                                <a href="<?php echo $votes_url; ?>" class="btn-u btn-u-dark btn-u-lg" id="vote" target="_blank" onclick="setTimeout(vote, 15000); setTimeout(vote1, 1000)">Voter pour <?= $name_server; ?></a>
                               <div id="recompense">
                                   <a href="<?php echo $this->Html->url(['controller' => 'votes', 'action' => 'vote']); ?>" class="btn-u btn-u-dark btn-u-lg">
                                     Confirmer mon vote.
                                   </a>
                               </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $this->element('sidebar'); ?>
    </div>
</div><!--/container-->     
<!-- End Content Part -->
<script type="text/javascript">
    $("#recompense").hide();
    function vote() {
        $('#recompense').show()
    }
    function vote1() {
        $('#vote').hide();
    }
</script>