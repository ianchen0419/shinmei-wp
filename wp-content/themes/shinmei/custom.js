var el = wp.element.createElement,
    blocks = wp.blocks,
    RichText = wp.editor.RichText;

// パンくずリスト
blocks.registerBlockType('my-plugin/contact-path', {
    title: 'パンくずリスト',
    icon: 'arrow-right-alt2',
    category: 'shinmei',
    attributes: {
        content: {
            type: 'array',
            source: 'children',
            selector: '.contact-path',
        },
    },

    edit: function (props) {
        var content = props.attributes.content;
        return el(
            RichText,
            {
                tagName: 'ol',
                multiline: 'li',
                className: 'contact-path',
                value: content,
                onChange: function (newContent) {
                    props.setAttributes({ content: newContent });
                }
            }
        );
    },

    save: function (props) {
        return el(RichText.Content, {
            tagName: 'ol',
            className: 'contact-path',
            value: props.attributes.content,
        });
    },
});

// 大見出し
blocks.registerBlockType('my-plugin/section-title', {
    title: '大見出し',
    icon: 'editor-paragraph',
    category: 'shinmei',
    attributes: {
        content: {
            type: 'array',
            source: 'children',
            selector: 'h2.section-title',
        },
    },

    edit: function (props) {
        var content = props.attributes.content;
        return el(
            RichText,
            {
                tagName: 'h2',
                className: 'section-title',
                value: content,
                onChange: function (newContent) {
                    props.setAttributes({ content: newContent });
                }
            }
        );
    },

    save: function (props) {
        return el(RichText.Content, {
            tagName: 'h2',
            className: 'section-title',
            value: props.attributes.content,
        });
    },
});

// 丸付きリンク
blocks.registerBlockType('my-plugin/maru-link', {
    title: '丸付きリンク',
    icon: 'admin-links',
    category: 'shinmei',
    attributes: {
        content: {
            type: 'array',
            source: 'children',
            selector: '.maru-link',
            attribute: 'href'
        },
    },

    edit: function (props) {
        var content = props.attributes.content;
        return el(
            RichText,
            {
                tagName: 'div',
                className: 'maru-link',
                value: content,
                onChange: function (newContent) {
                    props.setAttributes({ content: newContent });
                }
            }
        );
    },

    save: function (props) {
        return el(RichText.Content, {
            tagName: 'div',
            className: 'maru-link',
            value: props.attributes.content,
        });
    },
});

// 小見出し
blocks.registerBlockType('my-plugin/deco-title', {
    title: '小見出し',
    icon: 'screenoptions',
    category: 'shinmei',
    attributes: {
        content: {
            type: 'array',
            source: 'children',
            selector: 'h3.deco-title',
        },
    },

    edit: function (props) {
        var content = props.attributes.content;
        return el(
            RichText,
            {
                tagName: 'h3',
                className: 'deco-title',
                value: content,
                onChange: function (newContent) {
                    props.setAttributes({ content: newContent });
                }
            }
        );
    },

    save: function (props) {
        return el(RichText.Content, {
            tagName: 'h3',
            className: 'deco-title',
            value: props.attributes.content,
        });
    },
});