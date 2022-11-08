import { qsa } from "./selector.js";

export function $one(selector, eventType, callback) {
    $on(selector, eventType, callback, {
        once: true
    });
}

export function $on(selectorOrElement, eventType, callback, options = undefined) {
    const elements = qsa(selectorOrElement);
    for (const element of elements) {
        element.addEventListener(eventType, callback, options);
    }
}

export function $delegate(selectorOrElement, eventType, childSelector, callback) {
    const elements = qsa(selectorOrElement);
    for (const element of elements) {
        element.addEventListener(eventType, (eventOnElement) => {
            if (eventOnElement.target.closest(childSelector)) {
                callback(eventOnElement);
            }
        });
    }
}