FROM node:16-alpine

RUN mkdir -p /usr/src/app/node_modules && chown -R node:node /usr/src/app

WORKDIR /usr/src/app

COPY package*.json ./

RUN npm install && npm cache clean --force

COPY --chown=node:node . .

COPY server.js ./

EXPOSE 8000

CMD [ "yarn", "start:dev" ]

