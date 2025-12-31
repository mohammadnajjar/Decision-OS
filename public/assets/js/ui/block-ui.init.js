/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Card init js
*/
"use strict";

class BlockUI {
    constructor(element, options = {}) {
        if (!element) return;

        this.element = element;
        this.options = {
            zIndex: options.zIndex || 10000,
            overlayClass: options.overlayClass || '',
            overflow: options.overflow || 'hidden',
            message: options.message || '<span class="spinner-border text-primary"></span>',
            onRelease: options.onRelease || null,
        };
        this.overlayElement = null;
        this.blocked = false;

        this._init();
    }

    _init() {
        this.element.dataset.blockui = 'true';
        this._setupListeners();
    }

    _setupListeners() {
        this._onClick('[data-blockui-button]', () => {
            this.block();
            setTimeout(() => this.release(), 3000);
        });
        this._onClick('[data-expand-button]', (btn) => this.toggleFullscreen(btn));
        this._onClick('[data-close-button]', () => this.element.remove());
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.element.classList.contains('fullscreen')) {
                this.toggleFullscreen(this.element.querySelector('[data-expand-button]'));
            }
        });
    }

    _onClick(selector, callback) {
        const button = this.element.querySelector(selector);
        if (button) button.addEventListener('click', () => callback(button));
    }

    toggleFullscreen(button) {
        const isFullscreen = this.element.classList.toggle('fullscreen');
        const icon = button?.querySelector('i');
        if (icon) {
            icon.classList.toggle('ri-fullscreen-line', !isFullscreen);
            icon.classList.toggle('ri-fullscreen-exit-line', isFullscreen);
        }
    }

    block() {
        if (this.blocked) return;
        this.overlayElement = document.createElement('div');
        this.overlayElement.className = `card-overlay ${this.options.overlayClass}`;
        this.overlayElement.innerHTML = this.options.message;
        this.overlayElement.style.zIndex = this.options.zIndex;
        this.element.style.overflow = this.options.overflow;
        this.element.appendChild(this.overlayElement);
        this.blocked = true;
    }

    release() {
        if (!this.blocked) return;
        this.overlayElement?.remove();
        this.overlayElement = null;
        this.blocked = false;
        this.options.onRelease?.();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const initBlockUI = (selector, options) => {
        const element = document.querySelector(selector);
        if (element) new BlockUI(element, options);
    };

    const blocks = [
        { selector: '[data-blockui-element="block-1"]', message: '<span class="spinner-border text-danger"></span>' },
        { selector: '[data-blockui-element="block-2"]', message: '<span class="spinner-border text-primary"></span> Loading...' },
        { selector: '[data-blockui-element="block-3"]', message: '<span class="spinner-border text-primary"></span>', overlayClass: 'custom-overlay fw-semibold' },
        { selector: '[data-blockui-element="block-4"]', message: '<span class="btn-loader text-primary"><i class="ri-loader-2-fill fs-20"></i></span>' },
        { selector: '[data-blockui-element="block-5"]', message: '<span class="btn-loader text-primary"><i class="ri-refresh-line fs-20"></i></span>' },
        { selector: '[data-blockui-element="block-6"]', message: '<span class="spinner-grow text-primary"></span>' },
    ];

    blocks.forEach(({ selector, ...options }) => initBlockUI(selector, options));
});
