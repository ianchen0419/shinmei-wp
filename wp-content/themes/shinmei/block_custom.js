var el = wp.element.createElement,
    blocks = wp.blocks,
    RichText = wp.editor.RichText;

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

blocks.registerBlockType('my-plugin/section-title', {
    title: '大見出し',
    icon: 'editor-paragraph',
    category: 'shinmei',
    attributes: {
        content: {
            type: 'array',
            source: 'children',
            selector: '.section-title',
        },
    },

    edit: function (props) {
        var content = props.attributes.content;
        return el(
            RichText,
            {
                tagName: 'div',
                multiline: 'h2',
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
            tagName: 'div',
            className: 'section-title',
            value: props.attributes.content,
        });
    },
});