const http = require("http");
const express = require("express");
const app = express();
const cors = require("cors");
const redis = require("redis");
require("dotenv").config();
const { NODE_SERVER_PORT, NODE_SERVER_HOST } = process.env;
 //get port from env file
app.use(express.json());

const subscriber = redis.createClient();
//subscribe to general channel

subscriber.subscribe("general");

//now listen to whatever message is sent from laravel service
subscriber.on("message", function (channel, data) {
console.log(data, channel);
});

const server = http.createServer(app);
//subscribe to general channel


server.listen(NODE_SERVER_PORT, NODE_SERVER_HOST, function () {
    console.log("server is running...", NODE_SERVER_PORT);
});
