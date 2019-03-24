#FROM ubuntu:17.10
FROM ubuntu:18.04

#from packages:
RUN apt update && export DEBIAN_FRONTEND=noninteractive && apt install -y php-cli wget git

RUN echo 1

#RUN wget https://raw.githubusercontent.com/php-opencv/php-opencv-packages/master/opencv_3.4_amd64.deb && dpkg -i opencv_3.4_amd64.deb && rm opencv_3.4_amd64.deb
RUN wget https://raw.githubusercontent.com/php-opencv/php-opencv-packages/master/opencv_4.0.1_amd64.deb && dpkg -i opencv_4.0.1_amd64.deb && rm opencv_4.0.1_amd64.deb

#RUN wget https://raw.githubusercontent.com/php-opencv/php-opencv-packages/master/php-opencv_7.1-3.4_amd64.deb && dpkg -i php-opencv_7.1-3.4_amd64.deb && rm php-opencv_7.1-3.4_amd64.deb
RUN wget https://raw.githubusercontent.com/php-opencv/php-opencv-packages/master/php-opencv_7.2-4.0.1_amd64.deb && dpkg -i php-opencv_7.2-4.0.1_amd64.deb && rm php-opencv_7.2-4.0.1_amd64.deb

#RUN echo "extension=opencv.so" > /etc/php/7.1/cli/conf.d/opencv.ini
RUN echo "extension=opencv.so" > /etc/php/7.2/cli/conf.d/opencv.ini

#from sources:

#RUN apt update && apt install -y pkg-config cmake git php-cli php-dev

#RUN git clone https://github.com/opencv/opencv_contrib.git && git clone https://github.com/opencv/opencv.git

#RUN cd opencv_contrib && git checkout 3.4 && cd ../opencv && git checkout 3.4

#RUN mkdir build && cd build && cmake -D CMAKE_BUILD_TYPE=RELEASE -D CMAKE_INSTALL_PREFIX=/usr/local -D OPENCV_EXTRA_MODULES_PATH=../opencv_contrib/modules ../opencv && make -j4 && make install

#RUN ldconfig

#RUN git clone https://github.com/php-opencv/php-opencv.git

#RUN cd php-opencv && phpize && ./configure --with-php-config=/usr/bin/php-config && make && make install

#RUN echo "extension=opencv.so" > /etc/php/7.1/cli/conf.d/opencv.ini
#RUN echo "extension=opencv.so" > /etc/php/7.2/cli/conf.d/opencv.ini

#build deb packages:

#RUN apt install -y checkinstall

#RUN cd build && checkinstall --default --type debian --install=no --pkgname opencv --pkgversion "3.4" --pkglicense "3-clause BSD License" --pakdir ~ --maintainer "php-opencv" --addso --autodoinst make install

#RUN cd php-opencv && checkinstall --default --type debian --install=no --pkgname php-opencv --pkgversion "7.1-3.4" --pkglicense "Apache 2.0" --pakdir ~ --maintainer "php-opencv" --addso --autodoinst make install
#RUN cd php-opencv && checkinstall --default --type debian --install=no --pkgname php-opencv --pkgversion "7.2-3.4" --pkglicense "Apache 2.0" --pakdir ~ --maintainer "php-opencv" --addso --autodoinst make install
