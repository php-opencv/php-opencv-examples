FROM ubuntu:17.10

ENV container docker

RUN apt update

RUN apt install -y pkg-config cmake git

RUN apt install -y php php-dev

RUN git clone https://github.com/opencv/opencv_contrib.git
RUN git clone https://github.com/opencv/opencv.git

RUN cd opencv_contrib && git checkout 3.4 && cd ../opencv && git checkout 3.4

RUN cd opencv && mkdir build && cd build

RUN cd opencv/build && cmake -D CMAKE_BUILD_TYPE=RELEASE -D CMAKE_INSTALL_PREFIX=/usr/local -D WITH_TBB=ON -D BUILD_NEW_PYTHON_SUPPORT=ON -D WITH_V4L=ON -D INSTALL_C_EXAMPLES=ON -D INSTALL_PYTHON_EXAMPLES=ON -D BUILD_EXAMPLES=ON -D WITH_QT=OFF -D WITH_OPENGL=ON -D OPENCV_EXTRA_MODULES_PATH=../../opencv_contrib/modules ..

RUN cd opencv/build && make -j6

RUN cd opencv/build && make install

RUN ldconfig

RUN git clone https://github.com/php-opencv/php-opencv.git

RUN cd php-opencv && phpize && ./configure --with-php-config=/usr/bin/php-config && make && make install

RUN echo "extension=opencv.so" > /etc/php/7.1/cli/conf.d/opencv.ini