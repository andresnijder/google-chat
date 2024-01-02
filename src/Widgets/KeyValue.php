<?php

namespace NotificationChannels\GoogleChat\Widgets;

use NotificationChannels\GoogleChat\Components\Button\AbstractButton;

class KeyValue extends AbstractWidget
{
    /**
     * Set the top label text.
     *
     * @param string $message
     * @return self
     */
    public function topLabel(string $message)
    {
        $this->payload['topLabel'] = $message;

        return $this;
    }

    /**
     * Set the content text.
     *
     * @param string $message
     * @return self
     */
    public function content(string $message)
    {
        $this->payload['content'] = $message;

        return $this;
    }

    /**
     * Set the bottom label text.
     *
     * @param string $message
     * @return self
     */
    public function bottomLabel(string $message)
    {
        $this->payload['bottomLabel'] = $message;

        return $this;
    }

    /**
     * Set the content multiline property.
     *
     * @param bool $value
     * @return self
     */
    public function setContentMultiline(bool $value)
    {
        $this->payload['contentMultiline'] = $value;

        return $this;
    }

    /**
     * Make the widget clickable through to the provided link.
     *
     * @param string $url
     * @return self
     */
    public function onClick(string $url)
    {
        $this->payload['onClick'] = [
            'openLink' => [
                'url' => $url,
            ],
        ];

        return $this;
    }

    /**
     * Set the icon of this widget.
     *
     * @param string $icon
     * @return self
     */
    public function icon(string $icon)
    {
        $this->payload['icon'] = $icon;

        return $this;
    }

    /**
     * Set the button of the widget.
     *
     * @param \NotificationChannels\GoogleChat\Components\Button\AbstractButton $button
     * @return self
     */
    public function button(AbstractButton $button)
    {
        $this->payload['button'] = $button;

        return $this;
    }

    /**
     * Return a new Key Value widget instance.
     *
     * @param string|null $topLabel
     * @param string|null $content
     * @param string|null $bottomLabel
     * @return self
     */
    public static function create(string $topLabel = null, string $content = null, string $bottomLabel = null)
    {
        $widget = new static;

        if ($topLabel) {
            $widget->topLabel($topLabel);
        }

        if ($content) {
            $widget->content($content);
        }

        if ($bottomLabel) {
            $widget->bottomLabel($bottomLabel);
        }

        return $widget;
    }
}
