export default class JsonFetcher {
    get(url) {
        return (fetch(url).then(this._parseResponseAsJson));
    }

    _parseResponseAsJson(response) {
        if (!response.ok) {
            throw new Error(`Fetch Error: ${response.statusText}`);
        }
        return response.json();
    }
}