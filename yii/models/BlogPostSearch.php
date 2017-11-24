<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BlogPost;

/**
 * BlogPostSearch represents the model behind the search form about `app\models\BlogPost`.
 */
class BlogPostSearch extends BlogPost
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_blog', 'comment_id', 'view'], 'integer'],
            [['title', 'article', 'date_published', 'image'], 'safe'],
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
        $query = BlogPost::find();

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
            'id_blog' => $this->id_blog,
            'date_published' => $this->date_published,
            'comment_id' => $this->comment_id,
            'view' => $this->view,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'article', $this->article])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
