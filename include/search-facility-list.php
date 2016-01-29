    <section id="bottoms">
        <!--div class="well container container-fluid wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"-->
        <div class="container container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class=" elm-mainheader align-center heading active" data-plugin="toggle-slide" data-target="next" data-type="mobile">
                       <h2 class="elm-maintitle align-center">Search Results: <?php echo ucfirst($key); if (!empty($state)) { echo  ', ' . ucfirst($state) . '.'; } ?></h2>
                    </div>

                    <div class="togglearea" style="display: block;">
                    
                        <ul class="list-locations clearfix">
                        <?php 
                            //  Filters
                            include 'include/filteredBy.php'; 
                             
                            foreach($productArray as $row) {                                
                                echo "<li class='col-xs-12 col-md-6 col-lg-6 fa fa-home'>
                                <a href='facdetails.php?fac=". $row['id'] . "'> " . $row['name1'] . "</a></li>";
                            }
                         ?>           
                        </ul>
                    </div>
            </div>   
        </div>
    </section><!--/#bottom-->



