<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BlogComment;

/**
 * BlogCommentSearch represents the model behind the search form about `app\models\BlogComment`.
 */
class BlogCommentSearch extends BlogComment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_comment', 'post_id', 'reply_to_id', 'user_id'], 'integer'],
            [['comment'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = BlogComment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_comment' => $this->id_comment,
            'post_id' => $this->post_id,
            'reply_to_id' => $this->reply_to_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
