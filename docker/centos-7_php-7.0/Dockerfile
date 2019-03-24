FROM centos:7.5.1804

RUN yum install -y epel-release

RUN yum install -y wget git make cmake gcc gcc-c++ rpm-build rpmdevtools

RUN yum -y install centos-release-scl && yum makecache && yum -y install devtoolset-7-gcc devtoolset-7-gcc-c++ && scl enable devtoolset-7 bash

RUN yum install -y epel-release http://rpms.remirepo.net/enterprise/remi-release-7.rpm
#RUN yum install -y
RUN yum-config-manager --enable remi-php70

RUN yum install -y php-cli php-devel phpconfig

ENV HOME=/opt/app-root/src PATH=/opt/app-root/src/bin:/opt/app-root/bin:/opt/rh/devtoolset-7/root/usr/bin/:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
ENV BASH_ENV=/opt/app-root/etc/scl_enable ENV=/opt/app-root/etc/scl_enable PROMPT_COMMAND=". /opt/app-root/etc/scl_enable"

COPY usr/local /usr/local

RUN git clone https://github.com/php-opencv/php-opencv.git
#COPY php-opencv /php-opencv

RUN cd php-opencv && export PKG_CONFIG=/usr/bin/pkg-config && export PKG_CONFIG_PATH=/usr/local/lib64/pkgconfig && phpize && ./configure --with-php-config=/usr/bin/php-config && make && make install && make test

RUN echo "extension=opencv.so" > /etc/php.d/opencv.ini

#todo: rpm-build