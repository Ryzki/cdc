  <!-- Start main-content -->
  <div class="main-content">

      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="http://placehold.it/1920x855">
          <div class="container pt-10 pb-10">
              <!-- Section Content -->
              <div class="section-content">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          <h2 class="title">UNIKAMA Tracer Study</h2>
                          <!-- <ol class="breadcrumb text-center text-black mt-10">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Pages</a></li>
                              <li class="active text-theme-colored">Page Title</li>
                          </ol> -->
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Section: Job Apply Form -->
      <section class="divider">
          <div class="container-fluid pt-60">
              <div class="row">
                  <div class="col-md-8 col-md-push-2">
                      <div class="border-1px p-30 mb-0">
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 18 of 18</h3>
                          <hr>
                          <p>Pada saat lulus, pada tingkat mana kompetensi dibawah ini yang anda kuasai ? (1-2 merupakan skor rendah, 3 medium, 4-5 merupakan skor tinggi)</p>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask18') ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-12">
                                  <table class="table">
                                    <tr class="text-center" style="font-weight:bold;">
                                        <td colspan="2">Rendah</td>
                                        <td></td>
                                        <td colspan="2">Tinggi</td>
                                    </tr>
                                    <tr style="text-align:center;border-top:solid 1px #000;border-bottom: solid 1px #000;height:30px;font-weight:bold;">
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                        <tr id="group1" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <td>
                                            <input name="group1" type="radio" id="radio_31" value="1" class="with-gap radio-col-pink" required/>
                                        </td>
                                        <td>
                                            <input name="group1" type="radio" id="radio_32" value="2" class="with-gap radio-col-purple" />
                                        </td>
                                        <td>
                                            <input name="group1" type="radio" id="radio_33" value="3" class="with-gap radio-col-deep-purple" />
                                        </td>
                                        <td>
                                            <input name="group1" type="radio" id="radio_34" value="4" class="with-gap radio-col-indigo" />
                                        </td>
                                        <td>
                                            <input name="group1" type="radio" id="radio_35" value="5" class="with-gap radio-col-blue" />
                                        </td>
                                        <td></td>
                                        <td class="text-left">Pengetahuan di bidang atau disiplin ilmu anda</td>
                                        </tr>
                                    
                                    <tr id="group2" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <td>
                                            <input name="group2" type="radio" id="radio_36" value="1" class="with-gap radio-col-pink" required/>
                                        </td>
                                        <td>
                                            <input name="group2" type="radio" id="radio_37" value="2" class="with-gap radio-col-purple" />
                                        </td>
                                        <td>
                                            <input name="group2" type="radio" id="radio_38" value="3" class="with-gap radio-col-deep-purple" />
                                    </td>
                                        <td><input name="group2" type="radio" id="radio_39" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_39"></label></td>
                                        <td><input name="group2" type="radio" id="radio_40" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_40"></label></td>
                                        <td></td>
                                        <td class="text-left">Pengetahuan di luar bidang atau disiplin ilmu anda</td>
                                    </tr>
                                    
                                    <tr id="group3" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                        <td><input name="group3" type="radio" id="radio_41" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_41"></label></td>
                                        <td><input name="group3" type="radio" id="radio_42" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_42"></label></td>
                                        <td><input name="group3" type="radio" id="radio_43" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_43"></label></td>
                                        <td><input name="group3" type="radio" id="radio_44" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_44"></label></td>
                                        <td><input name="group3" type="radio" id="radio_45" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_45"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Pengetahuan umum</td>
                                    </tr>
                                    
                                    <tr id="group4" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                        <td><input name="group4" type="radio" id="radio_46" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_46"></label></td>
                                        <td><input name="group4" type="radio" id="radio_47" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_47"></label></td>
                                        <td><input name="group4" type="radio" id="radio_48" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_48"></label></td>
                                        <td><input name="group4" type="radio" id="radio_49" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_49"></label></td>
                                        <td><input name="group4" type="radio" id="radio_50" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_50"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Bahasa Inggris</td>
                                    </tr>
                                    
                                    <tr id="group5" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                        <td><input name="group5" type="radio" id="radio_51" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_51"></label></td>
                                        <td><input name="group5" type="radio" id="radio_52" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_52"></label></td>
                                        <td><input name="group5" type="radio" id="radio_53" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_53"></label></td>
                                        <td><input name="group5" type="radio" id="radio_54" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_54"></label></td>
                                        <td><input name="group5" type="radio" id="radio_55" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_55"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Ketrampilan internet</td>
                                    </tr>
                                    
                                    <tr id="group6" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <!--<div class="input-group">-->
                                        <!--<div class="demo-radio-button">-->
                                        <td><input name="group6" type="radio" id="radio_56" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_56"></label></td>
                                        <td><input name="group6" type="radio" id="radio_57" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_57"></label></td>
                                        <td><input name="group6" type="radio" id="radio_58" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_58"></label></td>
                                        <td><input name="group6" type="radio" id="radio_59" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_59"></label></td>
                                        <td><input name="group6" type="radio" id="radio_60" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_60"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Ketrampilan komputer</td>
                                    </tr>
                                    
                                    <tr id="group7" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <!--<div class="input-group">-->
                                        <!--<div class="demo-radio-button">-->
                                        <td><input name="group7" type="radio" id="radio_61" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_61"></label></td>
                                        <td><input name="group7" type="radio" id="radio_62" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_62"></label></td>
                                        <td><input name="group7" type="radio" id="radio_63" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_63"></label></td>
                                        <td><input name="group7" type="radio" id="radio_64" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_64"></label></td>
                                        <td><input name="group7" type="radio" id="radio_65" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_65"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Berpikir kritis</td>
                                    </tr>
                                    
                                    <tr id="group8" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <!--<div class="input-group">-->
                                        <!--<div class="demo-radio-button">-->
                                        <td><input name="group8" type="radio" id="radio_66" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_66"></label></td>
                                        <td><input name="group8" type="radio" id="radio_67" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_67"></label></td>
                                        <td><input name="group8" type="radio" id="radio_68" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_68"></label></td>
                                        <td><input name="group8" type="radio" id="radio_69" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_69"></label></td>
                                        <td><input name="group8" type="radio" id="radio_70" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_70"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Ketrampilan riset</td>
                                    </tr>
                                    
                                    <tr id="group9" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <!--<div class="input-group">-->
                                        <!--<div class="demo-radio-button">-->
                                        <td><input name="group9" type="radio" id="radio_71" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_71"></label></td>
                                        <td><input name="group9" type="radio" id="radio_72" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_72"></label></td>
                                        <td><input name="group9" type="radio" id="radio_73" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_73"></label></td>
                                        <td><input name="group9" type="radio" id="radio_74" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_74"></label></td>
                                        <td><input name="group9" type="radio" id="radio_75" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_75"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Kemampuan belajar</td>
                                    </tr>
                                    
                                    <tr id="group10" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <!--<div class="input-group">-->
                                        <!--<div class="demo-radio-button">-->
                                        <td><input name="group10" type="radio" id="radio_76" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_76"></label></td>
                                        <td><input name="group10" type="radio" id="radio_77" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_77"></label></td>
                                        <td><input name="group10" type="radio" id="radio_78" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_78"></label></td>
                                        <td><input name="group10" type="radio" id="radio_79" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_79"></label></td>
                                        <td><input name="group10" type="radio" id="radio_80" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_80"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Kemampuan berkomunikasi</td>
                                    </tr>
                                    
                                    <tr id="group11" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <!--<div class="input-group">-->
                                        <!--<div class="demo-radio-button">-->
                                        <td><input name="group11" type="radio" id="radio_81" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_81"></label></td>
                                        <td><input name="group11" type="radio" id="radio_82" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_82"></label></td>
                                        <td><input name="group11" type="radio" id="radio_83" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_83"></label></td>
                                        <td><input name="group11" type="radio" id="radio_84" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_84"></label></td>
                                        <td><input name="group11" type="radio" id="radio_85" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_85"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Bekerja dibawah tekanan</td>
                                    </tr>
                                    
                                    <tr id="group12" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <!--<div class="input-group">-->
                                        <!--<div class="demo-radio-button">-->
                                        <td><input name="group12" type="radio" id="radio_86" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_86"></label></td>
                                        <td><input name="group12" type="radio" id="radio_87" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_87"></label></td>
                                        <td><input name="group12" type="radio" id="radio_88" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_88"></label></td>
                                        <td><input name="group12" type="radio" id="radio_89" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_89"></label></td>
                                        <td><input name="group12" type="radio" id="radio_90" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_90"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Manajemen waktu</td>
                                    </tr>
                                    
                                    <tr id="group13" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <!--<div class="input-group">-->
                                        <!--<div class="demo-radio-button">-->
                                        <td><input name="group13" type="radio" id="radio_91" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_91"></label></td>
                                        <td><input name="group13" type="radio" id="radio_92" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_92"></label></td>
                                        <td><input name="group13" type="radio" id="radio_93" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_93"></label></td>
                                        <td><input name="group13" type="radio" id="radio_94" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_94"></label></td>
                                        <td><input name="group13" type="radio" id="radio_95" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_95"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Bekerja secara mandiri</td>
                                    </tr>
                                    
                                    <tr id="group14" class="text-center" style="border-bottom:dashed 1px gray;">
                                        <!--<div class="input-group">-->
                                        <!--<div class="demo-radio-button">-->
                                        <td><input name="group14" type="radio" id="radio_96" value="1" class="with-gap radio-col-pink" required/>
                                        <label for="radio_96"></label></td>
                                        <td><input name="group14" type="radio" id="radio_97" value="2" class="with-gap radio-col-purple" />
                                        <label for="radio_97"></label></td>
                                        <td><input name="group14" type="radio" id="radio_98" value="3" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_98"></label></td>
                                        <td><input name="group14" type="radio" id="radio_99" value="4" class="with-gap radio-col-indigo" />
                                        <label for="radio_99"></label></td>
                                        <td><input name="group14" type="radio" id="radio_100" value="5" class="with-gap radio-col-blue" />
                                        <label for="radio_100"></label></td>
                                        <!--</div>-->	
                                        <!--</div>-->
                                        <td></td>
                                        <td class="text-left">Bekerja dalam tim/bekerjasama dengan orang lain</td>
                                    </tr>
                                    
                                    <tr id="group15" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group15" type="radio" id="radio_101" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_101"></label></td>
                                    <td><input name="group15" type="radio" id="radio_102" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_102"></label></td>
                                    <td><input name="group15" type="radio" id="radio_103" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_103"></label></td>
                                    <td><input name="group15" type="radio" id="radio_104" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_104"></label></td>
                                    <td><input name="group15" type="radio" id="radio_105" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_105"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Kemampuan dalam memecahkan masalah</td>
                                    </tr>
                                    
                                    <tr id="group16" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group16" type="radio" id="radio_106" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_106"></label></td>
                                    <td><input name="group16" type="radio" id="radio_107" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_107"></label></td>
                                    <td><input name="group16" type="radio" id="radio_108" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_108"></label></td>
                                    <td><input name="group16" type="radio" id="radio_109" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_109"></label></td>
                                    <td><input name="group16" type="radio" id="radio_110" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_110"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Negosiasi</td>
                                    </tr>
                                    
                                    <tr id="group17" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group17" type="radio" id="radio_111" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_111"></label></td>
                                    <td><input name="group17" type="radio" id="radio_112" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_112"></label></td>
                                    <td><input name="group17" type="radio" id="radio_113" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_113"></label></td>
                                    <td><input name="group17" type="radio" id="radio_114" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_114"></label></td>
                                    <td><input name="group17" type="radio" id="radio_115" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_115"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Kemampuan analisis</td>
                                    </tr>
                                    
                                    <tr id="group18" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group18" type="radio" id="radio_116" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_116"></label></td>
                                    <td><input name="group18" type="radio" id="radio_117" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_117"></label></td>
                                    <td><input name="group18" type="radio" id="radio_118" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_118"></label></td>
                                    <td><input name="group18" type="radio" id="radio_119" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_119"></label></td>
                                    <td><input name="group18" type="radio" id="radio_120" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_120"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Toleransi</td>
                                    </tr>
                                    
                                    <tr id="group19" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group19" type="radio" id="radio_121" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_121"></label></td>
                                    <td><input name="group19" type="radio" id="radio_122" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_122"></label></td>
                                    <td><input name="group19" type="radio" id="radio_123" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_123"></label></td>
                                    <td><input name="group19" type="radio" id="radio_124" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_124"></label></td>
                                    <td><input name="group19" type="radio" id="radio_125" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_125"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Kemampuan adaptasi</td>
                                    </tr>
                                    
                                    <tr id="group20" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group20" type="radio" id="radio_126" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_126"></label></td>
                                    <td><input name="group20" type="radio" id="radio_127" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_127"></label></td>
                                    <td><input name="group20" type="radio" id="radio_128" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_128"></label></td>
                                    <td><input name="group20" type="radio" id="radio_129" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_129"></label></td>
                                    <td><input name="group20" type="radio" id="radio_130" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_130"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Loyalitas</td>
                                    </tr>
                                    
                                    <tr id="group21" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group21" type="radio" id="radio_131" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_131"></label></td>
                                    <td><input name="group21" type="radio" id="radio_132" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_132"></label></td>
                                    <td><input name="group21" type="radio" id="radio_133" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_133"></label></td>
                                    <td><input name="group21" type="radio" id="radio_134" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_134"></label></td>
                                    <td><input name="group21" type="radio" id="radio_135" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_135"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Integritas</td>
                                    </tr>
                                    
                                    <tr id="group22" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group22" type="radio" id="radio_136" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_136"></label></td>
                                    <td><input name="group22" type="radio" id="radio_137" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_137"></label></td>
                                    <td><input name="group22" type="radio" id="radio_138" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_138"></label></td>
                                    <td><input name="group22" type="radio" id="radio_139" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_139"></label></td>
                                    <td><input name="group22" type="radio" id="radio_140" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_140"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Bekerja dengan orang yang berbeda budaya maupun latar belakang</td>
                                    </tr>
                                    
                                    <tr id="group23" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group23" type="radio" id="radio_141" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_141"></label></td>
                                    <td><input name="group23" type="radio" id="radio_142" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_142"></label></td>
                                    <td><input name="group23" type="radio" id="radio_143" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_143"></label></td>
                                    <td><input name="group23" type="radio" id="radio_144" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_144"></label></td>
                                    <td><input name="group23" type="radio" id="radio_145" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_145"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Kepemimpinan</td>
                                    </tr>
                                    
                                    <tr id="group24" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group24" type="radio" id="radio_146" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_146"></label></td>
                                    <td><input name="group24" type="radio" id="radio_147" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_147"></label></td>
                                    <td><input name="group24" type="radio" id="radio_148" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_148"></label></td>
                                    <td><input name="group24" type="radio" id="radio_149" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_149"></label></td>
                                    <td><input name="group24" type="radio" id="radio_150" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_150"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Kemampuan dalam memegang tanggung jawab</td>
                                    </tr>
                                    
                                    <tr id="group25" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group25" type="radio" id="radio_151" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_151"></label></td>
                                    <td><input name="group25" type="radio" id="radio_152" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_152"></label></td>
                                    <td><input name="group25" type="radio" id="radio_153" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_153"></label></td>
                                    <td><input name="group25" type="radio" id="radio_154" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_154"></label></td>
                                    <td><input name="group25" type="radio" id="radio_155" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_155"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Inisiatif</td>
                                    </tr>
                                    
                                    <tr id="group26" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group26" type="radio" id="radio_156" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_156"></label></td>
                                    <td><input name="group26" type="radio" id="radio_157" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_157"></label></td>
                                    <td><input name="group26" type="radio" id="radio_158" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_158"></label></td>
                                    <td><input name="group26" type="radio" id="radio_159" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_159"></label></td>
                                    <td><input name="group26" type="radio" id="radio_160" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_160"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Manajemen proyek/program</td>
                                    </tr>
                                    
                                    <tr id="group27" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group27" type="radio" id="radio_161" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_161"></label></td>
                                    <td><input name="group27" type="radio" id="radio_162" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_162"></label></td>
                                    <td><input name="group27" type="radio" id="radio_163" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_163"></label></td>
                                    <td><input name="group27" type="radio" id="radio_164" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_164"></label></td>
                                    <td><input name="group27" type="radio" id="radio_165" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_165"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Kemampuan untuk memresentasikan ide/produk/laporan</td>
                                    </tr>
                                    
                                    <tr id="group28" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group28" type="radio" id="radio_166" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_166"></label></td>
                                    <td><input name="group28" type="radio" id="radio_167" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_167"></label></td>
                                    <td><input name="group28" type="radio" id="radio_168" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_168"></label></td>
                                    <td><input name="group28" type="radio" id="radio_169" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_169"></label></td>
                                    <td><input name="group28" type="radio" id="radio_170" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_170"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Kemampuan dalam menulis laporan, memo dan dokumen</td>
                                    </tr>
                                    
                                    <tr id="group29" class="text-center" style="border-bottom:dashed 1px gray;">
                                    <!--<div class="input-group">-->
                                    <!--<div class="demo-radio-button">-->
                                    <td><input name="group29" type="radio" id="radio_171" value="1" class="with-gap radio-col-pink" required/>
                                    <label for="radio_171"></label></td>
                                    <td><input name="group29" type="radio" id="radio_172" value="2" class="with-gap radio-col-purple" />
                                    <label for="radio_172"></label></td>
                                    <td><input name="group29" type="radio" id="radio_173" value="3" class="with-gap radio-col-deep-purple" />
                                    <label for="radio_173"></label></td>
                                    <td><input name="group29" type="radio" id="radio_174" value="4" class="with-gap radio-col-indigo" />
                                    <label for="radio_174"></label></td>
                                    <td><input name="group29" type="radio" id="radio_175" value="5" class="with-gap radio-col-blue" />
                                    <label for="radio_175"></label></td>
                                    <!--</div>-->	
                                    <!--</div>-->
                                    <td></td>
                                    <td class="text-left">Kemampuan untuk terus belajar sepanjang hayat</td>
                                    </tr>
								</table>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                  <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Selesai</button>
                              </div>
                          </form>
                          <!-- Job Form Validation-->
                          <script type="text/javascript">
                              $(document).ready(function() {
                              });
                          </script>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- end main-content -->