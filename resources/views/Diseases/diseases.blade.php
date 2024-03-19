@extends('layout.master')
@section('title', 'Books')

@section('mainContent')
<div class="all-page">
    <h2 style="text-align: end;margin-right: 16px;">: لمحة عن الأمراض التي تحمي منها اللقاحات </h2>
    <div class="all-diseases">
        <div class="diseases">
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/شلل الأطفال/تعريف/6019549390542323556_121.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;"> شلل الأطفال </h4>
                    <p style="text-align: end;">
                        هو مرض فيروسي يحدث عندما ينتقل فيروس شلل الأطفال
                        عن طريق التلامس المباشر مع شخص مصاب بالفيروس أو
                        عن طريق الطعام و الماء الملوث
                    </p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">أعراض مرض شلل الأطفال </h4>
                    <p style="text-align: end;">95% من الحالات لاتظهر عليها أي أعراض , ومع ذلك إذا ظهرت اعراض فهي تشمل
                        الحمى
                        و التعب و الصداع و الغثيان والفيء و تصلب الرقبة والظهر والألم في الذراعين والساقين</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/شلل الأطفال/أعراض/6019549390542323558_121.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/شلل الأطفال/اللقاح المستخدم/6019549390542323559_120.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">اللقاح المستخدم في الوقاية من مرض شلل الأطفال </h4>
                    <p style="text-align: end;">العضلي IPV و الفمويbOPV </p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الآثار الجانبية للقاح شلل الأطفال </h4>
                    <p style="text-align: end;">حمى منخفضة أو آلام مفاصل أة آلام بالجسم أو النعاس أو القيء</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/شلل الأطفال/آثار اللقاح/6019549390542323557_121.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph-more pt-5">
                <div style="width: 400px; height: 200px;"></div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المزيد</h4>
                    <p style="text-align: end;">فيروس شلل الأطفال شديد العدوى و يستطيع الأشخاص الحاملون للفيروس نقله
                        للآحرين
                        دون ظهور أعراض عليهم</p>
                </div>
            </div>
            <hr class="paragraph-stroke" />
        </div>
        <div class="diseases">
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الحصبة/تعريف/6019549390542323565_109.jpg')}}" alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الحصبة الألمانية </h4>
                    <p style="text-align: end;">هي مرض فيروسي معدي من أشهر علاماته طفح جلدي أحمر ومميز,
                        هذا المرض يكون عادة مصحوبا بحمى خفيفة</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">أعراض مرض الحصبة الألمانية </h4>
                    <p style="text-align: end;">في الاطفال, الأعراض التالية تستمر يومين أو ثلاثة ايام : طفح جلدي يبدأ
                        على الوجه وينتشر
                        إلى بقية الجسم - حمى منخفضة -</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الحصبة/أعراض/6019549390542323568_121.jpg')}}" alt="" />
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الحصبة/اللقاح المستخدم/6019549390542323564_120.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">اللقاحات المستخدمة في الوقاية من مرض الحصبة الألمانية </h4>
                    <p style="text-align: end;">أفضل طريقة للحماية من الحصبة الالمانية هي لقاح MMR</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الآثار الجانبية للقاح الحصبة الالمانية </h4>
                    <p style="text-align: end;">معظم الأطفال لا يعانون من آثار جانبية بسبب اللقاح,
                        ولكن الآثار الجانبية التي قد تحدث تكون خفيفة جدا
                        مثل الحمى أو الطفح الجلدي أو ألم أو تورم بمكان الحقن</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الحصبة/آثار اللقاح/6019549390542323566_120.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph-more pt-5">
                <div style="width: 400px; height: 200px;"></div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المزيد</h4>
                    <p style="text-align: end;"> الإصابة بالمرض أثناء الحمل قد تتسبب في عيوب خلقية مثل الصم والعمى
                        والإعاقة الذهنية وأمراض القلب وتلف الكبد أو الطحال</p>
                </div>
            </div>
            <hr class="paragraph-stroke" />
        </div>
        <div class="diseases">
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الحصبة الألمانية/تعريف/6019549390542323565_109.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الحصبة </h4>
                    <p style="text-align: end;">هو مرض تتسبب فيه فيروسات وينتشر عن طريق الهواء عندما يقوم الشخص المصاب
                        بالتنفس أو السعال أو العطس</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">أعراض مرض الحصبة </h4>
                    <p style="text-align: end;">يبدأ بالحمى وبعد فترة وجيزة يتسبب في سعال ورشح بالأنف واحمرار العينين,
                        طفح جلدي يبدأ في الرأس وينتشر إلى بقية الجسم ( طفح حطاطي بقعي غير حويصلي : بقع حمراء )</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الحصبة الألمانية/أعراض/6019549390542323568_121.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الحصبة الألمانية/اللقاح المستخدم/6019549390542323570_121.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">اللقاح المستخدم في الوقاية من مرض الحصبة </h4>
                    <p style="text-align: end;">لقاح الحصبة هو اللقاح المستخدم في الوقاية من مرض الحصبة (M - MR - MMR )
                    </p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الآثار الجانبية للقاح الحصبة </h4>
                    <p style="text-align: end;">حمى - طفح خفيف</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الحصبة الألمانية/آثار اللقاح/6019549390542323566_120.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph-more pt-5">
                <div style="width: 400px; height: 200px;"></div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المزيد</h4>
                    <p style="text-align: end;">الحصبة تضعف قدرة الطفل على محاربة الامراض الأخرى وهي السبب المباشر في
                        بعض الوفيات,
                        وتساهم لاسيما في البلدان الفقيرة التي يعاني فيها الاطفال من سوء التغذية وكثرة الاعتلال, في
                        ارتفاع عدد الوفيات بعد نوبة المرض</p>
                </div>
            </div>
            <hr class="paragraph-stroke" />
        </div>
        <div class="diseases">
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الدفتيريا/تعريف/6019549390542323572_120.jpg')}}" alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الدفتيريا</h4>
                    <p style="text-align: end;">مرض تتسبب فيه جراثيم, وينتشر عن طريق الهواء عندما يقوم الشخص المصاب
                        بالتنفس
                        أو السعال أو العطاس, يصيب عادة الرئتين وجهاز التنفس</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">أعراض مرض الدفتيريا</h4>
                    <p style="text-align: end;"> تبدأ بأعراض مثل البرد والتهاب الحلق وحمى خفيفة وقشعريرة</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الدفتيريا/أعراض/6019549390542323573_120.jpg')}}" alt="" />
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الدفتيريا/اللقاح المستخدم/6019549390542323574_120.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">اللقاحات المستخدمة في الوقاية من مرض الدفتيريا </h4>
                    <p style="text-align: end;">الثنائي الطفلي Dt - الثنائي الكهلي Td - الخماسي الكبدي - الخماسي
                        اللاخلوي - السداسي</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الآثار الجانبية للقاح الدفتيريا </h4>
                    <p style="text-align: end;">الاحمرار والتورم والألم بموقع الحقن - الحمى - الإقياء</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الدفتيريا/آثار اللقاح/6019549390542323573_120.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph-more pt-5">
                <div style="width: 400px; height: 200px;"></div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المزيد</h4>
                    <p style="text-align: end;">الجرثوم ينتج سم يؤذي أو يدمر أنسجة الجسم البشري وأعضائه</p>
                </div>
            </div>
            <hr class="paragraph-stroke" />
        </div>
        <div class="diseases">
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/المستدمية النزلية/تعريف/6019549390542323577_120.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المستدمية النزلية Hib </h4>
                    <p style="text-align: end;">تسبب هذه الجراثيم في مجموعة من الأمراض الخطيرة التي تصيب الأطفال دون
                        خمس
                        سنوات,
                        مثل: انتان الدم, ذات الرئة, التهاب السحايا, التهاب أذن وسطى</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">أعراض مرض المستدمية النزلية من النوع ب </h4>
                    <p style="text-align: end;">في حال حدوث التهاب سحايا فإن أعراض التهاب السحايا الناجم عن مرض
                        المستدمية النزلية
                        من النوع ب تتضمن الحمى والتخليط العقلي وتصلب الرقبة ( صلابة نقرة )</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/المستدمية النزلية/أعراض/6019549390542323577_120.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/المستدمية النزلية/اللقاح المستخدم/6019549390542323581_120.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">اللقاحات المستخدمة في الوقاية من مرض المستدمية النزلية من النوع ب
                    </h4>
                    <p style="text-align: end;">عن طريق الحقن والفاصل بينها لا يقل عن أربعة اسابيع</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الآثار الجانبية للقاح المستدمية النزلية من النوع ب </h4>
                    <p style="text-align: end;">الاحمرار والحمى وتكون خفيفة وتختفي من تلقاء نفسها</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/المستدمية النزلية/آثار اللقاح/6019549390542323573_120.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph-more pt-5">
                <div style="width: 400px; height: 200px;"></div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المزيد</h4>
                    <p style="text-align: end;">تسبب أمراض خطيرة في الدم والمفاصل والعظام وغشاء القلب</p>
                </div>
            </div>
            <hr class="paragraph-stroke" />
        </div>
        <div class="diseases">
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/التهاب الكبد B/تعريف/6019549390542323590_120.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;"> التهاب الكبد ب</h4>
                    <p style="text-align: end;">هو مرض يصيب الكبد يتسبب فيه فيروس الالتهاب الكبدي B,
                        وقد يتراوح هذا المرض من علة خفيفة تدوم بضعة أسابيع إلى مرض خطير يستمر مدى الحياة</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">أعراض مرض التهاب الكبد ب </h4>
                    <p style="text-align: end;">عادة لا تظهر أعراض على الأطفال دون سن الخامسة - فقدان الشهية - الحمى -
                        التعب -
                        ألم بالعضلات أو المفاصل أو المعدة - غثيان أو إقياء أو إسهال - اليرقان</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/التهاب الكبد B/أعراض/6019549390542323589_120.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/التهاب الكبد B/اللقاح المستخدم/6019279842689794506_121.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">اللقاحات المستخدمة في الوقاية من مرض التهاب الكبد </h4>
                    <p style="text-align: end;">لقاح الالتهاب الكبدي هو المستخدم في الوقاية من مرض الالتهاب الكبدي</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الآثار الجانبية للقاحات التهاب الكبد </h4>
                    <p style="text-align: end;">ألم مكان إعطاء اللقاح وحمى وتعب</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/التهاب الكبد B/آثار اللقاح/6019549390542323573_120.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph-more pt-5">
                <div style="width: 400px; height: 200px;"></div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المزيد</h4>
                    <p style="text-align: end;">مرض خطير يصيب الكبد, وقد يتسبب بحصول تشمع كبد ومن ثم سرطان خلية كبدية
                    </p>
                </div>
            </div>
            <hr class="paragraph-stroke" />
        </div>
        <div class="diseases">
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/النكاف/تعريف/6019549390542323593_120.jpg')}}" alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">النكاف</h4>
                    <p style="text-align: end;">النكاف هو مرض فيروسي معدي يصيب الغدد اللعابية,
                        ينتشر النكاف من شخص لآخر عبر قطرات اللعاب أو المخاط من فم الشخص المصاب,
                        وعادة يحدث ذلك عندما يقوم الشخص بالسعال أو العطاس أو التحدث,
                        قد ينتشر الفيروس بشكل غير مباشر عندما يلمس شخص مصاب بالنكاف أشياء وأسطح دون غسل يديه</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">أعراض مرض النكاف </h4>
                    <p style="text-align: end;">الأفراد المصابون بالنكاف عادة ما يشعرون أولا بالإعياء مع ظهور أعراض
                        عامة
                        مثل الصداع وفقدان الشهية والحمى الخفيفة - أشهر علامات الإصابة بالنكاف
                        هي تورم الغدد اللعابية أسفل الأذن - أعراض بالجهاز التنفسي أو أعراض عامة فقط
                        مثل الصداع وفقدان الشهية والحمى الخفيفة</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/النكاف/أعراض/6019549390542323594_120.jpg')}}" alt="" />
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/النكاف/اللقاح المستخدم/6019549390542323595_120.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">اللقاحات المستخدمة للوقاية من مرض النكاف </h4>
                    <p style="text-align: end;">عادة يتم دمج لقاح النكاف مع لقاحات الحصبة والحصبة الألمانية في لقاح
                        واحد
                        هو MMR</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الآثار الجانبية للقاح مرض النكاف </h4>
                    <p style="text-align: end;">الحمى هي أكثر الآثار الجانبية شيوعا وقد يظهر على بعض الأشخاص طفح جلدي
                    </p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/النكاف/آثار اللقاح/6019549390542323596_121.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph-more pt-5">
                <div style="width: 400px; height: 200px;"></div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المزيد</h4>
                    <p style="text-align: end;">ينتشر النكاف بسهولة من شخص لآخر ويمكن أن يؤدي إلى مضاعفات خطيرة مثل
                        فقدان السمع</p>
                </div>
            </div>
            <hr class="paragraph-stroke" />
        </div>
        <div class="diseases">
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/السعال الديكي/تعريف/6019549390542323599_120.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">السعال الديكي (الشاهوق) </h4>
                    <p style="text-align: end;">تتسبب فيه بكتيريا تنتشر عن طريق الهواء عندما يقوم الشخص المصاب بالتنفس
                        أو السعال أو العطاس</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">أعراض مرض السعال الديكي (الشاهوق) </h4>
                    <p style="text-align: end;">يبدأ برشح في الأنف والعطس والسعال الخفيف وتوقف التنفس عند الرضع,
                        يصبح السعال عنيفا بعد أسبوع أو أسبوعين ويبدأ الطفل في إخراج صوت صياح الديك
                        وهو يستنشق الهواء, قد يتحول لون الأطفال الرضع والأطفال الصغار إلى اللون الأزرق أثناء السعال
                        بسبب نقص الأكسجين</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/السعال الديكي/أعراض/6019549390542323600_121.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/السعال الديكي/اللقاح المستخدم/6019549390542323601_121.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">اللقاحات المستخدمة في الوقاية من مرض السعال الديكي (الشاهوق) </h4>
                    <p style="text-align: end;">يتطلب لقاح السعال الديكي تناول مجموعة مكونة من أربع جرعات</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الآثار الجانبية للقاح السعال الديكي (الشاهوق) </h4>
                    <p style="text-align: end;">الاحمرار والتورم والألم مكان الحقن, الحمى, الإقياء</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/السعال الديكي/آثار اللقاح/6019549390542323596_121.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph-more pt-5">
                <div style="width: 400px; height: 200px;"></div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المزيد</h4>
                    <p style="text-align: end;">الأطفال الذين يصابون بالسعال الديكي قد يتعرضون لمضاعفات خطيرة, مثل
                        الالتهاب الرئوي والتشنجات وتلف الدماغ</p>
                </div>
            </div>
            <hr class="paragraph-stroke" />
        </div>
        <div class="diseases">
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الكزاز/تعريف/6019549390542323602_121.jpg')}}" alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الكزاز </h4>
                    <p style="text-align: end;">هو مرض يتسبب فيه سم ينتج من مطثيات الكزاز, وهو يتسبب في تصلب العضلات
                        وعادة ما يكون مميتا</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">أعراض مرض الكزاز </h4>
                    <p style="text-align: end;">الكزاز عند الاطفال يبدأ بالصداع وتشنج الفك وتشنجات العضلات,
                        ويتسبب أيضا في تصلب العضلات المؤلم في الجسم كله وصعوبة في البلع,
                        والنوبات والحمى والتعرق, وارتفاع ضغط الدم, وسرعة ضربات القلب</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الكزاز/أعراض/6019549390542323603_121.jpg')}}" alt="" />
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الكزاز/اللقاح المستخدم/6019549390542323606_120.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">اللقاحات المستخدمة في الوقاية من مرض الكزاز </h4>
                    <p style="text-align: end;">أفضل طريقة للحماية من الكزاز عند الأطفال هي أن تتناول الأم قبل أن تلد
                        خمس جرعات بينها فواصل
                        زمنية مناسبة ويجب أن يتناول الأطفال أول جرعة لهم وهم رضع</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الآثار الجانبية للقاح الكزاز </h4>
                    <p style="text-align: end;">معظم الأطفال لا تظهر عليهم آثار جانبية, حيث إن الآثار الجانبية التي
                        تحدث
                        عادة ما تكون خفيفة,
                        مثل: احمرار أو تورم أو ألم موقع الحقن - الحمى - الإقياء</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/الكزاز/آثار اللقاح/6019549390542323607_120.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph-more pt-5">
                <div style="width: 400px; height: 200px;"></div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المزيد</h4>
                    <p style="text-align: end;">الكزاز مرض خطير جدا </p>
                </div>
            </div>
            <hr class="paragraph-stroke" />
        </div>
        <div class="diseases">
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/السل/تعريف/6019549390542323609_121.jpg')}}" alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">السل </h4>
                    <p style="text-align: end;">مرض تتسبب فيه الجراثيم وينتشر عن طريق الهواء عندما يقوم الشخص المصاب
                        بالتنفس
                        أو السعال أو العطس وهو يصيب عادة الرئتين, ولكن قد يؤثر ايضا على الكلى والعامود الفقري والمخ</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">أعراض مرض السل </h4>
                    <p style="text-align: end;">الضعف والسعال المصحوب بدم والتعرق ليلا وآلام بالصدر وفقدان الوزن</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/السل/أعراض/6019549390542323610_120.jpg')}}" alt="" />
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/السل/اللقاح المستخدم/6019549390542323611_121.jpg')}}"
                        alt="" />
                </div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">اللقاحات المستخدمة في الوقاية من مرض السل </h4>
                    <p style="text-align: end;">لقاح BCG يستخدم في الوقاية من سلسلة معينة من مرض السل تتسبب في التهاب
                        السحايا عند الأطفال</p>
                </div>
            </div>
            <div class="paragraph pt-5">
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">الآثار الجانبية للقاح السل </h4>
                    <p style="text-align: end;">بعد الحقن مباشرة تتكون بثور بارزة مكان الحقن وقد تظهر بقعة صغيرة حمراء
                        بموقع الحقن بعد فترة تتراوح من أسبوعين إلى ست أسابيع من التلقيح,
                        وهذه البقعة الحمراء تختفي في النهاية لكنها قد تترك ندبة</p>
                </div>
                <div class="d-img">
                    <img style="width: 400px; height: 200px; border-radius: 10px;"
                        src="{{ asset('assests/imges/des imgs/السل/آثار اللقاح/6019549390542323612_120.jpg')}}"
                        alt="" />
                </div>
            </div>
            <div class="paragraph-more pt-5">
                <div style="width: 400px; height: 200px;"></div>
                <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                    <h4 style="text-align: end;">المزيد</h4>
                    <p style="text-align: end;">إن لم لحصل المريض على العلاج المناسب فإن مرض السل يكون مميتا, الجرثومة
                        المسببة لمرض السل تهاجم الرئتين والكلى والعامود الفقري
                        والمخ وقد تؤدي إلى فشل في الأعضاء وفي النهاية الوفاة</p>
                </div>
            </div>
            <hr class="paragraph-stroke" />
        </div>
    </div>
</div>
@endsection