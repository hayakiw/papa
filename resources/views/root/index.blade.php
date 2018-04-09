@extends('layout.master')

<?php
    $layout = [
        'title' => '',
        'description' => '○○のページです。',
        'js' => [],
    ];
?>

@section('content')

    <section class="main-visual">
      <div class="container">
        <div class="copy">
          <h1 class="text-center"><img src="{{ asset('img/copy.png') }}" alt=""></h1>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- / .main-visual -->
    <section class="about">
      <div class="headline">
        <h2>みんなのお父さんとは?</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="h3 text-center description">「みんなのお父さん」は、家庭教師や力仕事、家事代行まで、<br class="default" />
              身の回りの困りごとを片付けたいひとと、そんな困りごとのお手伝いをしたいひとをつなぐ、<br class="default" />
              マッチングサービスです。 </div>
            <!-- / .h3 -->
          </div>
          <!-- / .col-sm-12 -->
        </div>
        <!-- / .row -->
        <div class="figure">
          <div class="seal">
            <div class="text">みんなの<br />
              お父さんの<br />
              仕組み</div>
            <!-- / .text -->
          </div>
          <!-- / .seal -->
          <img src="{{ asset('img/figure_service.png') }}" alt=""></div>
        <!--  div class="row">
          <div class="col-sm-4"><img src="{{ asset('img/about_point_01.jpg') }}" alt=""></div>
          <div class="col-sm-4"><img src="{{ asset('img/about_point_02.jpg') }}" alt=""></div>
          <div class="col-sm-4"><img src="{{ asset('img/about_point_03.jpg') }}" alt=""></div>
        </div -->
      </div>
      <!-- /.container -->
    </section>
    <!-- / .about -->
    <section class="flow">
      <div class="headline">
        <h2>みんなのお父さんの使い方</h2>
      </div>
      <!-- .container ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- ----------------------- -->
      <div class="container clearfix">
        <div class="fl w49 m_r2">
          <h3 class="tc"><strong>依頼したい人</strong></h3>
          <div class="icon tc"><img src="{{ asset('img/icon_request.png') }}" alt=""></div>
        </div>
        <div class="fl w49">
          <h3 class="tc"><strong>仕事したい人</strong></h3>
          <div class="icon tc"><img src="{{ asset('img/icon_worker.png') }}" alt=""></div>
        </div>
      </div>
      <!-- / .clearfix -->
      <!-- .container ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- ----------------------- -->
      <div class="container clearfix m_u40">
        <div class="flow-box request">
          <div class="title"><span class="number">01</span> サービスを依頼する</div>
          <!-- / .title -->
          <div class="description m_u20"> 販売されているサービスから、希望するサービスを選んで、仕事の依頼を行います。代金は前払いです。<br />
            ただし、希望したサービスの販売者が、依頼内容の引き受けを確定するまでは、代金は引き落とされません。</div>
          <!-- / .description -->
          <div class="link"><a href="{{ route('item.index') }}" class="button red">販売されているサービス一覧はこちら</a></div>
        </div>
        <!-- / .flow-box -->
        <div class="flow-box worker">
          <div class="title"><span class="number">01</span> ｢みんなのお父さん｣に登録する</div>
          <!-- / .title -->
          <div class="description m_u20">｢仕事をしたい方はこちら｣から 新規登録を行います。住所、氏名、年齢、クレジットカードなどの必要情報、自分が提供したいサービスを入力し、サービスの販売を行います。</div>
          <!-- / .description -->
          <div class="link"><a href="{{ route('staff.root.index') }}" class="button yellow">｢みんなのお父さん｣への登録はこちら</a></div>
        </div>
        <!-- / .flow-box -->
      </div>
      <!-- / .clearfix -->
      <!-- .container ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- ----------------------- -->
      <div class="container clearfix m_u40">
        <div class="flow-box request">
          <div class="title"><span class="number">02</span> 依頼したサービスの引き受け手を待つ</div>
          <!-- / .title -->
          <div class="description m_u20"> 依頼した仕事は、必ずしも引き受け手があらわれるとは限りません。祈って待ちましょう。｢みんなのお父さん｣は、家庭教師から家事代行まで、いろいろなサービスを提供したいお父さんを登録しています。<br />
            どんなサービスが依頼できそうか、チェックしておきましょう。</div>
          <!-- / .description -->
          <div class="link"><a href="#staff-list" class="button red">お父さん一覧はこちら</a></div>
        </div>
        <!-- / .flow-box -->
        <div class="flow-box worker">
          <div class="title"><span class="number">02</span> 依頼中のサービスに応募する</div>
          <!-- / .title -->
          <div class="description m_u20"> 自分が提供したいサービスに依頼があったら、依頼内容を確認し、引き受けるか、引き受けないか決めます。都合があわなかったり、引き受けるのに心配がある場合には、断りましょう。引き受けるのに不都合がなく、条件があえば、見事マッチング成立です!</div>
          <div class="link"><a href="{{ route('orders.index') }}" class="button yellow">依頼されているサービスの確認はこちら</a></div>
        </div>
        <!-- / .flow-box -->
      </div>
      <!-- / .clearfix -->
      <!-- .container ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- ----------------------- -->
      <div class="container clearfix m_u40">
        <div class="flow-box request">
          <div class="title"><span class="number">03</span> サービスを受けます</div>
          <!-- / .title -->
          <div class="description m_u20"> 見事、依頼したサービスの引き受けてがあらわれたら、マッチング成立です。マッチング成立の通知後、代金が引き落とされます。<br />
            その後、実際に依頼したサービスの提供を受けましょう。<br />
            もし諸事情でサービスが提供されなかった場合には、代金は返金されます。</div>
          <!-- / .description -->
        </div>
        <!-- / .flow-box -->
        <div class="flow-box worker">
          <div class="title"><span class="number">03</span> サービスを提供します</div>
          <!-- / .title -->
          <div class="description m_u20"> 依頼されたサービスを提供します。サービス提供後、報酬を受け取ります。</div>
          <!-- <div class="link"><a href="#" class="button yellow">依頼されているサービスの確認はこちら</a></div> -->
        </div>
        <!-- / .flow-box -->
      </div>
      <!-- / .clearfix -->
      <!-- .container ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- ----------------------- -->
    </section>
    <!-- / .flow -->
    <section class="service-list">
      <div class="headline">
        <h2>サービス一覧</h2>
      </div>
      <div class="container">
        <div class="row">
          @foreach(App\Category::topCategories() as $category)
          <div class="survice-column">
            <div class="text-center">
              <h3>{{ $category->name }}</h3>
            </div>
            <ul>
              @foreach($category->children as $child)
              <li><a href="{{ route('item.index', ['category' => $child->id ]) }}">{{ $child->name }}</a></li>
              @endforeach
            </ul>
          </div>
          <!-- / .survice-column -->
          @endforeach
        </div>
        <!-- / .row -->
      </div>
      <!-- / .container -->
    </section>
    <!-- / .service-list -->
    <!-- section staff-list  ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <a name="staff-list" id="staff-list"></a>
    <section class="staff-list">
      <div class="headline">
        <h2>おとうさん一覧</h2>
      </div>
      <div class="container">
        <div class="row">
          @foreach(App\Staff::All() as $staff)
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <img src="{{ $staff->imageUrl() }}" alt="" >
              <div class="caption">
                <h3>{{ $staff->getName() }}</h3>
                <p>{!! nl2br(e(mb_strim($staff->description, 0, 80))) !!}</p>
                <p><a href="{{ route('staff.show', ['staff' => $staff->id ]) }}" class="btn btn-primary" role="button">詳細</a>
                  <!-- <a href="#" class="btn btn-default" role="button">Button</a> -->
                </p>
              </div>
              <!-- / .caption -->
            </div>
            <!-- / thumbnail. -->
          </div>
          <!-- / .col- -->
          @endforeach
        </div>
        <!-- / .row -->
      </div>
      <!-- / .container -->
    </section>
@endsection
