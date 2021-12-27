
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Form 02</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/contact.css" />
  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center"></div>
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row no-gutters">
                <div
                  class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch"
                >

                  <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 class="mb-4">املئ معلوماتك</h3>
                    <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4">
                      تم إرسال رسالتك ، شكرا لك
                    </div>
                    <form
                      method="POST"
                      id="contactForm"
                      name="contactForm"
                      class="contactForm"
                      action="{{route('contact.store')}}">
                      @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="label" for="name">
                              <h5>
                                الاسم الكامل
                              </h5>
                            </label>
                            <input
                              type="text"
                              class="form-control"
                              name="contact_name"
                              id="name"
                              placeholder="الاسم"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="label" for="email">
                              <h5>
                                البريد الالكتروني
                              </h5>
                            </label>
                            <input
                              type="email"
                              class="form-control"
                              name="contact_email"
                              id="email"
                              placeholder="الايميل"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="label" for="subject">
                              <h5>الموضوع</h5>
                            </label>
                            <input
                              type="text"
                              class="form-control"
                              name="contact_subject"
                              id="subject"
                              placeholder="الموضوع"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="label" for="#">
                              <h5>محتوى الرسالة</h5>
                            </label>
                            <textarea
                              name="contact_comment"
                              class="form-control"
                              id="message"
                              cols="30"
                              rows="4"
                              placeholder="الرسالة"
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input
                              type="submit"
                              {{-- href="{{route('publicc.contact.create')}} --}}
                              name="submit"
                              value="ارسال"
                              class="btn"
                              style="background-color: #ff3f18;"

                            />
                          {{-- <button><a href="{{route('contact.store')}}" ></a></button> --}}
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                  <div
                    class="info-wrap w-100 p-md-5 p-4"
                    style="background-color: #ff3f18;"
                  >
                    <h3>معلومات التواصل</h3>
                    <p class="mb-4">
                      نحن منفتحون على أي اقتراح أو لمجرد الدردشة
                    </p>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="icon d-flex align-items-center justify-content-center"
                      >
                        <span class="fa fa-map-marker"></span>
                      </div>
                      <div class="text pl-3">
                        <p><span>الموقع: عمان-دوار الداخلية</span></p>
                    </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="icon d-flex align-items-center justify-content-center"
                      >
                        <span class="fa fa-phone"></span>
                      </div>
                      <div class="text pl-3">
                        <p>
                          <span>هاتف :</span>
                          <a href="tel://0777777777">0777777777</a>
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="icon d-flex align-items-center justify-content-center"
                      >
                        <span class="fa fa-paper-plane"></span>
                      </div>
                      <div class="text pl-3">
                        <p>
                          <a href="mailto:info@gmail.com">info@gmail.com</a>
                          <span>: ايميل</span>
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="icon d-flex align-items-center justify-content-center"
                      >
                        <span class="fa fa-globe"></span>
                      </div>
                      <div class="text pl-3">
                        <p>
                          <a href="#">yoursite.com</a>
                          <span>: الموقع</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
