function startWebsocketClient() {
    const ws = new WebSocket('ws://localhost:8999');
    ws.onopen = function () {
        console.log('Websocket started');
    };

    ws.onmessage = function (msg) {
        if (msg.data === 'reload-browser') {
            window.location.reload();
        }
    };

    ws.onclose = window.startWebsocketClient;
}

window.startWebsocketClient = startWebsocketClient;