FROM node:10-alpine

RUN mkdir -p /usr/src/client

WORKDIR /usr/src/client

COPY . ./

RUN rm -rf node_modules/node-sass
RUN npm install

CMD npm install && npm start ;
