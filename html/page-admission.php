<?php get_header(); ?>
<body>
    <header>
        <section id="main-visual">
            <!-- <div class="line-top"></div> -->
            <div class="common-hero">
                <!--         <div class="demo-innercontent">
            <h1><span>jQuery</span> . <span>zoomSlider</span></h1>
            <p>ZoomSlider creates slideshows with zoom effect using background-image and CSS3.</p>
        </div> -->
            </div>
<?php get_sidebar(); ?>
</section>
    </header>
    <main>
        <div class="h1-area">
            <h1 class="common-title">入園案内</h1>
        </div>
        <section id="s-nav" class="section">
            <p><a href="#meeting"><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> 入園説明会について</a> | <a href="#admission"><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> 2020年度 募集要項</a></p>
        </section>
       <section id="meeting" class="section fadein-bottom">
            <div class="container">
                <div class="h2-area">
                    <h2>入園説明会について<br><span class="h2-sub">Explanatory Meeting</span></h2>
                    <div class="meeting-text">
                            <ul>
                                <li>　　日程　：　<strong class="mkr_lime">9月7日（土）</strong></li>
                                <li>　　　　　　　午前　10:00 - 12:00</li>
                                <li>　　　　　　　午前　13:00 - 15:00</li><br>
                                <li>　　場所　：　つぼみ幼稚園 3階ホール</li>
                                <li>　　　　　　　※上履きを持参ください<br></li>
                                <li><p><br>入園説明会への参加は事前お申し込みが必要です。<br>
お電話もしくはメールにて１週間前までにお申し込みをお願い致します。<br></p></li>
<li><br><center><a class="button" href="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> お問い合わせ</a></center></li>
                            </ul>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meeting.png" alt="" class="meeting-img">


                    </div>

                </div>
            </div>

        </section>



        <section id="admission" class="section">
            <div class="container">
                <div class="h2-area">
                    <h2>2020年度 募集要項<br><span class="h2-sub">Admission Guidelines</span></h2>

                    <table class="admin-tbl summary-text pc-mode">
                        <thead>
                            <tr>
                                <th></th>
                                <th>対象年齢</th>
                                <th>保育時間</th>
                                <th>昼食</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>年少児クラス</th>
                                <td>2015年(平成27年)4月2日～<br>
                                    2016年(平成28年)4月1日生</td>
                                <td>月・火・木・金　　8：45～13：45<br>
                                    　　　水　　　　　8：45～11：15</td>
                                <td>お弁当：週4回、給食：なし </td>
                            </tr>
                            <tr>
                                <th>年中児クラス</th>
                                <td>2014年(平成26年)4月2日～<br>
                                    2015年(平成27年)4月1日生</td>
                                <td>月・火・木・金　　8：45～14：00<br>
                                    　　　水　　　　　8：45～11：15</td>
                                <td>お弁当：週4回、給食：なし </td>
                            </tr>
                            <tr>
                                <th>年長児クラス</th>
                                <td>2013年(平成25年)4月2日～<br>
                                    2014年(平成26年)4月1日生</td>
                                <td>月・火・木・金　　8：45～14：15<br>
                                    　　　水　　　　　8：45～11：15</td>
                                <td>お弁当：週4回、給食：なし </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="admin-tbl summary-text m-mode">
                            <tr>
                                <th colspan="2">年少児クラス</th></tr>
                                <tr><th>対象年齢</th><td>2015年(平成27年)4月2日～<br>
                                    2016年(平成28年)4月1日生</td></tr>
                                <tr><th>保育時間</th><td>月・火・木・金　　8：45～13：45<br>
                                    　　　水　　　　　8：45～11：15</td></tr>
                                <tr><th>昼食</th><td>お弁当：週4回、給食：なし </td></tr>
                            </tr>
                            <tr>
                    </table>

                    <table class="admin-tbl summary-text m-mode">
                            <tr>
                                <th colspan="2">年中児クラス</th></tr>
                                <tr><th>対象年齢</th><td>2014年(平成26年)4月2日～<br>
                                    2015年(平成27年)4月1日生</td></tr>
                                <tr><th>保育時間</th><td>月・火・木・金　　8：45～14：00<br>
                                    　　　水　　　　　8：45～11：15</td></tr>
                                <tr><th>昼食</th><td>お弁当：週4回、給食：なし </td></tr>
                            </tr>
                            <tr>
                    </table>

                    <table class="admin-tbl summary-text m-mode">
                            <tr>
                                <th colspan="2">年長児クラス</th></tr>
                                <tr><th>対象年齢</th><td>2013年(平成25年)4月2日～<br>
                                    2014年(平成26年)4月1日生</td></tr>
                                <tr><th>保育時間</th><td>月・火・木・金　　8：45～14：15<br>
                                    　　　水　　　　　8：45～11：15</td></tr>
                                <tr><th>昼食</th><td>お弁当：週4回、給食：なし </td></tr>
                            </tr>
                            <tr>
                    </table>
                </div>
            </div>
        </section>
        <div class="line_bottom"></div>
    </main> <!-- main -->
<?php get_footer(); ?>